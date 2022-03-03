<?php

namespace App\Controller;

use App\Entity\Category;
use App\Form\CategorieType;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController
{
    /**
     * @Route("/categorie", name="app_categorie")
     */
    public function index(): Response
    {
        return $this->render('categorie/liste.html.twig', [
            'controller_name' => 'CategorieController',
        ]);
    }

    /**
     * @Route("/ajout_categorie",name="ajout_categorie")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response

     * @return Response
     */
    public function ajoutboutique(Request $request )
    {
        $categorie= new Category();
        $form= $this->createForm(CategorieType::class,$categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            /** @var UploadedFile $uploadedFile */
            $uploadedFile = $form['image']->getData();
            if ($uploadedFile)
            {
                $destination = $this->getParameter('kernel.project_dir').'/public/uploads';
                $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename.'-'.uniqid().'.'.$uploadedFile->guessExtension();
                $uploadedFile->move(
                    $destination,
                    $newFilename
                );
                $categorie->setImage($newFilename);
            }

            $em=$this->getDoctrine()->getManager();

            $em->persist($categorie);
            $em-> flush();
            return $this->redirectToRoute('listeCategory');

        }
        return $this->render('categorie/addCategory.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route ("category/Update{id}",name="category")
     */
    function Update_Boutique(CategoryRepository $repository, $id,Request $request)
    {

        $category = $repository->find($id);
        $form = $this->createForm(CategorieType::class, $category);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            /** @var UploadedFile $uploadedFile */
            $uploadedFile = $form['image']->getData();
            if ($uploadedFile)
            {
                $destination = $this->getParameter('kernel.project_dir').'/public/uploads';
                $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename.'-'.uniqid().'.'.$uploadedFile->guessExtension();
                $uploadedFile->move(
                    $destination,
                    $newFilename
                );
                $category->setImage($newFilename);
            }
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('liste_category');


        }
        return $this->render('categorie/modif.html.twig', [
            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/listeCategory", name="listeCategory")
     */
    public function liste_category()
    {
        $repository=$this->getdoctrine()->getrepository(Category::class);
        $category =$repository->findAll();

        return $this->render('categorie/index.html.twig',array(

            'category' =>$category));

    }
    /**
     * @Route("suppcategori/{id}",name="suppcategori")
     */

    public function suppcategori($id ,CategoryRepository $repository)
    {

        $em = $this->getDoctrine()->getManager();
        $categ = $repository->find($id);
        $em->remove($categ);
        $em->flush();
        return $this->redirectToRoute('listeCategory');
    }
}
