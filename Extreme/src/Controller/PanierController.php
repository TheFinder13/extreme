<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class PanierController extends AbstractController
{
    /**
     * @Route("/panier", name="panier")
     */
    public function index(SessionInterface $session, ProduitRepository $produitRepository, Request $request)
    {
        $panier = $session->get('panier', []);
        $panierWithData = [];
        foreach ($panier as $id => $quantity) {
            $produit = $produitRepository->find($id);

            $panierWithData[] = [
                'produit' => $produit,
                'quantity' => $quantity

            ];
        }
        $total = 0;
        foreach ($panierWithData as $item) {
            $totalitem = $item['produit']->getPrix() * $item['quantity'];
            $total += $totalitem;
        }
        return $this->render('panier/index.html.twig', [
            'items' => $panierWithData,
            'total' => $total
        ]);
    }
    /**
     * @Route("/panier/add/{id}", name="card_add")
     */
    public function addPanier($id, SessionInterface $session)
    {
        $panier = $session->get('panier', []);
        if (!empty($panier[$id])) {
            $panier[$id]++;
        } else {
            $panier[$id] =  1;
        }

        $session->set('panier', $panier);
        return $this->redirectToRoute("panier");
    }
    /**
     * @Route("/panier/remove/{id}", name="card_remove")
     */
    public function remove($id, SessionInterface $session)
    {
        $panier = $session->get('panier', []);
        if (!empty($panier[$id])) {
            unset($panier[$id]);
        }

        $session->set('panier', $panier);
        return $this->redirectToRoute("panier");
    }
    /**
     * @Route("/moin/add/{id}", name="card_moin")
     */
    public function MoinPanier($id, SessionInterface $session)
    {
        $panier = $session->get('panier', []);
        if (!empty($panier[$id])) {
            if ($panier[$id] > 1) {
                $panier[$id]--;
            } else {
                unset($panier[$id]);
            }
        } else {
            $panier[$id] =  1;
        }

        $session->set('panier', $panier);
        return $this->redirectToRoute("panier");
    }
    /**
     * @Route("/deleteall", name="delete_all")
     */
    public function Deleteall(SessionInterface $session)
    {
        $panier = $session->get('panier', []);
        unset($panier);
        $session->set("panier", []);




        return $this->redirectToRoute("panier");
    }

    /**
     * @Route("/livraison", name="commande")
     * @param SessionInterface $session
     * @return Response
     */
    public function commande(SessionInterface $session,Request $request,ProduitRepository $produitRepository,MailerInterface $mailer)
    {
        $em = $this->getDoctrine()->getManager();
        $panier = $session->get('panier', []);
        $commande = new Commande();


        $prixTotalForCommand = 0;
        foreach ($panier as $productID => $qte) {
            $product = $produitRepository->find($productID);
            $prix = $product->getPrix();
            $prixTotalForCommand = $prixTotalForCommand + $prix * $qte;
        }
        $commande->setPrixTot($prixTotalForCommand . "");
        $commande->setDate(new \DateTime());
        $commande->setQuantity($qte);
        $commande->addProduit($product);

        $email = (new Email())
            ->from('azizabouda131@gmail.com')
            ->To('hanine.benayed@esprit.tn')
            ->subject('Il y a une nouvelle commande au extreme !')
            ->html('check out ')
            ->text($commande->getPrixTot());

        $em->persist($commande);
        $mailer->send($email);

        $session->clear();
        $em->flush();


        return $this->redirectToRoute('panier');



    }
}
