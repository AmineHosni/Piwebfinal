<?php

namespace MainBundle\Controller;

use MainBundle\Entity\Magasin;
use MainBundle\Form\MagasinType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MagasinController extends Controller
{
    public function addAction(Request $request)
    {
        $magasin = new Magasin();
        $form = $this->createForm(MagasinType::class,$magasin);
        $form->handleRequest($request);
        //if ( $request->isMethod("post"))
        if( ($form->isSubmitted() && ($form->isValid()) ))
        {
            $user = $this->getUser();

            $em = $this->getDoctrine()->getEntityManager();

            $magasin->setOwner($user);

            $em->persist($magasin);
            $em->flush();
            return $this->redirectToRoute('Magasin_List');
        }
        return $this->render(":Magasin:add.html.twig",array("form"=>$form->createView()));
    }

    public function listAction()
    {
        $user = $this->getUser();
        if (!is_object($user) ) {

            return $this->redirectToRoute('fos_user_security_login');
        }
        $id =  $this->getUser();
        $em=$this->getDoctrine()->getManager();

        $magasins = $em->getRepository('MainBundle:Magasin')->findAll();

        $profile = $em->getRepository('MainBundle:User')->findOneBy(array('id' => $id ));

        return $this->render(':Magasin:list.html.twig',array(
            'Magasin'=>$magasins,'profile'=>$profile
        ));
    }






    public function productsAction()
    {
        $user = $this->getUser();
        if (!is_object($user) ) {

            return $this->redirectToRoute('fos_user_security_login');
        }
        $id =  $this->getUser();
        $em=$this->getDoctrine()->getManager();



        return $this->render(':Magasin:addproducts.html.twig'
        );
    }



    public function productsinceptionAction()
    {
        $user = $this->getUser();
        if (!is_object($user) ) {

            return $this->redirectToRoute('fos_user_security_login');
        }
        $user =  $this->getUser();
        $em=$this->getDoctrine()->getManager();

        $magasins = $em->getRepository('MainBundle:Magasin')->findBy(array('owner' => $user ));
        $products = $em->getRepository('MainBundle:Product')->findBy(array('Seller' => $user,'magasin' => Null ));



        return $this->render(':Magasin:addcontent.html.twig',array(
            'magasins'=>$magasins,'products'=>$products
        ));
    }
    public function addproductsAction(Request $r)
    {                    $em=$this->getDoctrine()->getManager();


        $products = $r->get('products');
        $mags= $r->get('mag');
      var_dump($products);
        var_dump($mags);


        $newproducts= array_combine(  $products , $mags);
        foreach (   $newproducts as $produit=> $mag ) {
            $p = $em->getRepository("MainBundle:Product")->find($produit);
            $m = $em->getRepository("MainBundle:Magasin")->find($mag);

            $p->setMagasin($m);
            $em->persist($p);
            $em->flush();



        }
        return $this->redirectToRoute('Magasin_produits');



    }

    public function magasinDetailAction($idMagasin)
    {


        $em=$this->getDoctrine()->getManager();



        $magasins = $em->getRepository('MainBundle:Magasin')->findOneBy(array('id' => $idMagasin ));

        return $this->render(':Magasin:show.html.twig',array("magasin"=>$magasins));

    }

    public function editAction(Request $request,$idMagasin)
    {
        $magasin= $this->getDoctrine()->getRepository('MainBundle:Magasin')->findOneBy(array('id' => $idMagasin ));
        $form= $this->createForm(MagasinType::class,$magasin);
        $form->handleRequest($request);
        if ( ($form->isValid()) && ($form->isSubmitted()) )
        {
            $em= $this->getDoctrine()->getEntityManager();
            $em->merge($magasin);
            $em->flush();
            return $this->redirectToRoute('Magasin_List');
        }
        return $this->render(":Magasin:edit.html.twig",array("form"=>$form->createView()));

    }

    public function deleteAction($idMagasin)
    {

        $em = $this->getDoctrine()->getEntityManager();
        $idMagasin = $em->getRepository('MainBundle:Magasin')->find($idMagasin);

        $em->remove($idMagasin);
        $em->flush();
        return $this->redirectToRoute('Magasin_List');

    }

    public function listPersoAction()
    {
        $user = $this->getUser();
        if (!is_object($user) ) {

            return $this->redirectToRoute('fos_user_security_login');
        }
        $id =  $this->getUser();
        $em=$this->getDoctrine()->getManager();

        $magasins = $em->getRepository('MainBundle:Magasin')->findBy(array('owner'=> $id));

        $profile = $em->getRepository('MainBundle:User')->findOneBy(array('id' => $id ));

        return $this->render(':Magasin:listPerso.html.twig',array(
            'Magasin'=>$magasins,'profile'=>$id
        ));
    }

}
