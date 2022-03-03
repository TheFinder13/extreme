<?php

namespace App\Controller;

use App\Entity\SubCategory;
use App\Form\SouCategType;
use App\Repository\SubCategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SousCtegController extends AbstractController
{
    /**
     * @Route("/sous/cteg", name="app_sous_cteg")
     */
    public function index(): Response
    {
        return $this->render('sous_cteg/liste.html.twig', [
            'controller_name' => 'SousCtegController',
        ]);
    }

    /**
     * @Route("/ajout_scategorie",name="ajout_scategorie")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response

     * @return Response
     */
    public function ajoutboutique(Request $request )
    {
        $Scateg= new SubCategory();
        $form= $this->createForm(SouCategType::class,$Scateg);
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
                $Scateg->setImage($newFilename);
            }

            $em=$this->getDoctrine()->getManager();

            $em->persist($Scateg);
            $em-> flush();
            return $this->redirectToRoute('listesCategory');

        }
        return $this->render('sous_cteg/add.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route ("Scategory/Update{id}",name="Scategory")
     */
    function Update_Boutique(SubCategoryRepository $repository, $id,Request $request)
    {

        $Scategory = $repository->find($id);
        $form = $this->createForm(SouCategType::class, $Scategory);
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
                $Scategory->setImage($newFilename);
            }
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('listesCategory');


        }
        return $this->render('sous_cteg/modif.html.twig', [
            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/listesCategory", name="listesCategory")
     */
    public function liste_category()
    {
        $repository=$this->getdoctrine()->getrepository(SubCategory::class);
        $category =$repository->findAll();

        return $this->render('sous_cteg/liste.html.twig',array(

            'category' =>$category));

    }
    /**
     * @Route("suppscategori/{id}",name="suppscategori")
     */

    public function suppcategori($id ,SubCategoryRepository $repository)
    {

        $em = $this->getDoctrine()->getManager();
        $scateg = $repository->find($id);
        $em->remove($scateg);
        $em->flush();
        return $this->redirectToRoute('listesCategory');
    }
}
