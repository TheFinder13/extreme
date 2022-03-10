<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Produit;
use App\Entity\SubCategory;
use App\Repository\SubCategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MenuController extends AbstractController
{
    /**
     * @Route("/menu/{id}", name="app_menu")
     */
    public function index($id): Response
    {
        $repository=$this->getdoctrine()->getrepository(SubCategory::class);
        $category =$repository->find($id);

        return $this->render('menu/menu.html.twig',array(

            'category' =>$category));

    }/**
     * @Route("/premenu", name="premenu")
     */
    public function premenu(): Response
    {
        $repository=$this->getdoctrine()->getrepository(Category::class);
        $category =$repository->findAll();

        return $this->render('menu/premenu.html.twig',array(

            'category' =>$category));

    }

    /**
     * @param Request $request
     * @Route("/panierteste", name="panierteste")
     */
    public function prod(): Response
    {
        $repository=$this->getdoctrine()->getrepository(Produit::class);
        $produit =$repository->findAll();

        return $this->render('produit/details.html.twig',array(

            'category' =>$produit));
    }
}
