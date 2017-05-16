<?php

namespace MainBundle\Controller;



use MainBundle\Entity\Product;
use MainBundle\Entity\Wishlist;
use MainBundle\Entity\Panier;
use MainBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;



use MainBundle\Pagination\Paginator;

/**
 * User controller.
 *
 */
class UserController extends Controller {




    public function indexAction() {
        return $this->render('MainBundle:user:adminUsers.html.twig');}

        public function clientsindexAction() {


        return $this->render('MainBundle:user:clientsList.html.twig');
    }

    public function ajaxListAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $keyword = $request->get('keyword');

        $entities = $em->getRepository('MainBundle:User')->searcher($keyword);
        return $this->render('MainBundle:user:list.html.twig', array(
            'entities' => $entities,
        ));
    }


    public function clientsAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $searchParam = $request->get('searchParam');
        $entities = $em->getRepository('MainBundle:User')->search($searchParam);
        $pagination = (new Paginator())->setItems(count($entities), $searchParam['perPage'])->setPage($searchParam['page'])->toArray();

        return $this->render('MainBundle:user:clients.html.twig', array(
            'users' => $entities,
            'pagination' => $pagination,
        ));
    }

    public function ActiverAction(Request $request, $etat) {
        $users = $request->get('users');
        $userManager = $this->get('fos_user.user_manager');
        foreach ($users as $id) {
            $user = $userManager->findUserBy(array('id' => $id));
            if ($user->isEnabled()==1)
            $user->setEnabled(0);
            else
                $user->setEnabled(1);


            $userManager->updateUser($user);
        }
        return new Response('1');
    }
     public function mywishAction()
    {
        $em = $this->getDoctrine()->getManager();
        $id_user = $this->get('security.token_storage')->getToken()->getUser();
        $paniers = $em->getRepository('MainBundle:Wishlist')->findW($id_user);
        return $this->render('default/wishlist.html.twig', array(
            'paniers' => $paniers
        ));
    }



      public function newwishAction($id)
    {
            $em = $this->getDoctrine()->getManager();

        $id_user = $this->get('security.token_storage')->getToken()->getUser();
        $wishlist = new Wishlist();
          $x=  count( $wishlist=$em->getRepository("MainBundle:Wishlist")->findWP($id_user,$id));

      if ($x == 0) {
          # code...
      
        $product = new Product();
        $user = new User();
      
        $wishlist = new Wishlist();
        
        $id_user = $this->get('security.token_storage')->getToken()->getUser();
        $product=$em->getRepository("MainBundle:Product")->find($id);
        $user=$em->getRepository("MainBundle:User")->find($id_user);


            $wishlist->setIdProd($product);
      
            $wishlist->setIdUser($user);
            $em->persist($wishlist);
            $em->flush($wishlist);

}


              $modele=$em->getRepository("MainBundle:Coupon")->findAll();
        $product=$em->getRepository("MainBundle:Product")->findAll();
     return $this->render('MainBundle:Default:index.html.twig',
         array('modeles' => $modele,'products' => $product));
    }

         public function deleteAction($id)
    {
  
            $em = $this->getDoctrine()->getManager();
          $wishlist = new Wishlist();
           $wishlist=$em->getRepository("MainBundle:Wishlist")->find($id);
            $em->remove($wishlist);
            $em->flush($wishlist);
        
        $id_user = $this->get('security.token_storage')->getToken()->getUser();
        $paniers = $em->getRepository('MainBundle:Wishlist')->findW($id_user);
        return $this->render('default/wishlist.html.twig', array(
            'paniers' => $paniers
        ));
    }



    public function panierwishlistAction($id,$idpd)
    {


         $em = $this->getDoctrine()->getManager();
        $panier = new Panier();
        $product = new Product();
        $user = new User();
        
        $id_user = $this->get('security.token_storage')->getToken()->getUser();
        $product=$em->getRepository("MainBundle:Product")->find($idpd);
      
        $user=$em->getRepository("MainBundle:User")->find($id_user);


            $panier->setIdProd($product);
            $panier->setQtepan(1);
            $panier->setPrixTot($product->getPrixProduit());
            $panier->setIdUser($user);
            $em->persist($panier);
            $em->flush($panier);

          $wishlist = new Wishlist();
           $wishlist=$em->getRepository("MainBundle:Wishlist")->find($id);
            $em->remove($wishlist);
            $em->flush($wishlist);
        $id_user = $this->get('security.token_storage')->getToken()->getUser();
        $paniers = $em->getRepository('MainBundle:Wishlist')->findW($id_user);
        return $this->render('default/wishlist.html.twig', array(
            'paniers' => $paniers
        ));

      
}
}