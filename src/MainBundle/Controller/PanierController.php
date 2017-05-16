<?php

namespace MainBundle\Controller;

use MainBundle\Entity\Panier;
use MainBundle\Entity\User;
use MainBundle\Entity\Product;
use MainBundle\Entity\Coupon;
use MainBundle\Entity\Commande;
use MainBundle\Entity\Livraison;
use MainBundle\Entity\DetailsCommande;
use MainBundle\Entity\PanierRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Coupon controller.
 *
 */
class PanierController extends Controller
{
   
  public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $id_user = $this->get('security.token_storage')->getToken()->getUser();
        $paniers = $em->getRepository('MainBundle:Panier')->findC($id_user);

        return $this->render('panier/mycart.html.twig', array(
            'paniers' => $paniers,
        ));
    }
    public function newAction($id)
    {
            $em = $this->getDoctrine()->getManager();
        $panier = new Panier();
        $product = new Product();
        $user = new User();
        
        $id_user = $this->get('security.token_storage')->getToken()->getUser();
        $product=$em->getRepository("MainBundle:Product")->find($id);
        $user=$em->getRepository("MainBundle:User")->find($id_user);


            $panier->setIdProd($product);
            $panier->setQtepan(1);
            $panier->setPrixTot($product->getPrixProduit());
            $panier->setIdUser($user);
            $em->persist($panier);
            $em->flush($panier);


              $modele=$em->getRepository("MainBundle:Coupon")->findAll();
        $product=$em->getRepository("MainBundle:Product")->findAll();
     return $this->render('MainBundle:Default:index.html.twig',
         array('modeles' => $modele,'products' => $product));
    }
     public function deleteAction($id)
    {
  
            $em = $this->getDoctrine()->getManager();
          $panier = new Panier();
           $product=$em->getRepository("MainBundle:Panier")->find($id);
            $em->remove($product);
            $em->flush($product);
        
        $user = new User();
        
        $id_user = $this->get('security.token_storage')->getToken()->getUser();
         $paniers = $em->getRepository('MainBundle:Panier')->findC($id_user);

        return $this->render('panier/mycart.html.twig', array(
            'paniers' => $paniers,
        ));
    }

     public function checkoutAction(Request $request)
    {   
         $commande = new Commande();
          $livraison = new Livraison();
         $product = new Product();
         $pan = new Panier();
         $em = $this->getDoctrine()->getManager();
 $id_user = $this->get('security.token_storage')->getToken()->getUser();

         $product = $em->getRepository('MainBundle:Product')->findprodp($id_user);

         foreach ($product as $pr ) {
     
$qqq= $pr->getQuantiteStock() -1; 
         $pr->setQuantiteStock($qqq); 
           
        $em->persist($pr);
        $em->flush();
      }

         $form = $this->createForm('MainBundle\Form\LivraisonType', $livraison);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        
       
        $prixTot = $em->getRepository('MainBundle:Panier')->findprixTot($id_user);
        $user=$em->getRepository("MainBundle:User")->find($id_user);
         $modele=$em->getRepository("MainBundle:Product")->findAll();
            $commande->setcommandeTot($prixTot);
            $commande->setIdUser($user);
            $em->persist($commande);
            $em->flush($commande);

            $idcommande =$commande->getIdCommande();
        $paniers = $em->getRepository('MainBundle:Panier')->findprodpan($id_user);

        foreach ($paniers as $key) {
          $detailsc = new DetailsCommande();
        $qp=  $key->getQtepan();
          $idp=  $key->getIdProd()->getid();
          $detailsc->setqteProd($qp);
            $detailsc->setidCommande($idcommande);
              $detailsc->getidProd();
            $detailsc->setidProd($idp);
            $em->persist($detailsc);
            $em->flush();
          }

          $today =  new \DateTime("now");
           if ($form->isSubmitted() && $form->isValid()) {
         
           $ttprix= $prixTot+ 8000 ;
            $em = $this->getDoctrine()->getManager();
            $livraison->setIdUser($user);
            $livraison->setIdCommande($idcommande);
            $livraison->setPaiement("cash");
            $livraison->setMethLivraison("poste");
            $livraison->setDateLivraison($today);
            $livraison->setEtatPaie(0);
            $livraison->setPrixTotal($ttprix);
           
            //$coupon->_setUtilisateurId($id_user);
            $em->persist($livraison);
            $em->flush();

            return $this->redirectToRoute('order', array(
            'idcommande' => $idcommande
        ));
        }


        return $this->render('panier/checkout.html.twig', array(
           
            'form' => $form->createView(),
        ));
    }


        public function orderAction($idcommande)
       {     
        $commande = new Commande();
          $livraison = new Livraison();
         $product = new Product();
         $pan = new Panier();
        $em = $this->getDoctrine()->getManager();
        $id_user = $this->get('security.token_storage')->getToken()->getUser();
        $panierss = $em->getRepository('MainBundle:Panier')->findC($id_user);
        //suuprimer panier
    


        $livraison = $em->getRepository('MainBundle:Livraison')->findliv($idcommande);
        return $this->render('panier/order.html.twig', array(
            'paniers' => $panierss,'livraison' => $livraison
        ));
    }

  public function thanksAction()
    {
        $em = $this->getDoctrine()->getManager();
        $id_user = $this->get('security.token_storage')->getToken()->getUser();
        $panierss = $em->getRepository('MainBundle:Panier')->findC($id_user);
        foreach ($panierss as $k) {
           $em->remove($k);
            $em->flush($k);
        }
        return $this->render('panier/thanks.html.twig');
    }
}

