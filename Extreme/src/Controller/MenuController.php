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
     * @Route("/menu", name="app_menu")
     */
    public function index(): Response
    {
        $repository=$this->getdoctrine()->getrepository(SubCategory::class);
        $category =$repository->findAll();

        return $this->render('menu/menu.html.twig',array(

            'category' =>$category));

    }
    /**
     * @param Request $request
     * @Route("/paniertest", name="paniertest")
     */
    public function panier(): Response
    {
        return $this->render('panier/index.html.twig');
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
