<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
    /**
     * @Route("/produit", name="app_produit")
     */
    public function index(): Response
    {
        return $this->render('produit/liste.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }

    /**
     * @Route("/ajout_produit",name="ajout_produit")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response

     * @return Response
     */
    public function ajoutproduit(Request $request )
    {
        $Scateg= new Produit();
        $form= $this->createForm(ProduitType::class,$Scateg);
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
            return $this->redirectToRoute('listeProduit');

        }
        return $this->render('produit/addProduct.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route ("produit/Update{id}",name="produit")
     */
    function Update_Boutique(ProduitRepository $repository, $id,Request $request)
    {

        $Scategory = $repository->find($id);
        $form = $this->createForm(Produit::class, $Scategory);
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
            return $this->redirectToRoute('listeProduit');


        }
        return $this->render('produit/updateProduct.html.twig', [
            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/listeProduit", name="listeProduit")
     */
    public function liste_category()
    {
        $repository=$this->getdoctrine()->getrepository(Produit::class);
        $category =$repository->findAll();

        return $this->render('produit/index.html.twig',array(

            'category' =>$category));

    }
    /**
     * @Route("suppProduit/{id}",name="suppProduit")
     */

    public function suppcategori($id ,ProduitRepository $repository)
    {

        $em = $this->getDoctrine()->getManager();
        $scateg = $repository->find($id);
        $em->remove($scateg);
        $em->flush();
        return $this->redirectToRoute('listeProduit');
    }
}
