<?php

namespace MainBundle\Controller;

use MainBundle\Entity\VenteFlash;
use MainBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;

/**
 * Venteflash controller.
 *
 */
class VenteFlashController extends Controller
{
    /**
     * Lists all venteFlash entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user=$this->getUser();

        $venteFlashes = $em->getRepository('MainBundle:VenteFlash')->attente($user);

        return $this->render('venteflash/index.html.twig', array(
            'venteFlashes' => $venteFlashes,
        ));


    }


    public function ajaxindexAction($id, $operation,Request $r){
        if ($operation==1){
            $em = $this->getDoctrine()->getManager();



            $prod = $em->getRepository('MainBundle:Product')->findBy(array('venteflash' => $id));


            return $this->render('venteflash/addflash.html.twig', array(
                'id' => $id
            ));}

else
    {
        $em = $this->getDoctrine()->getManager();


        $products = $em->getRepository('MainBundle:Product')->findBy(array('venteflash' => $id));
        return $this->render('venteflash/delete.html.twig', array(
            'products' => $products,
            'id' => $id
        ));
    }}



    public function ajaxlistAction($id,$operation,Request $r){
        if ($operation==1){
            $em = $this->getDoctrine()->getManager();


$user=$this->getUser();

            $products = $em->getRepository('MainBundle:Product')->findBy(array('venteflash' => Null,'Seller'=>$user));

            return $this->render('venteflash/adding.html.twig', array(
                'products' => $products,
                'id' => $id
            ));}
        else
        {
            $em = $this->getDoctrine()->getManager();

            $user=$this->getUser();

            $products = $em->getRepository('MainBundle:Product')->findBy(array('venteflash' => Null,'Seller'=>$user));
            return $this->render('venteflash/deleting.html.twig', array(
                'products' => $products,
                'id' => $id
            ));}

    }

    public  function addtovente1Action (Request $request,$id,$prod){


        $em=$this->getDoctrine()->getEntityManager();
        $v= $em->getRepository("MainBundle:VenteFlash")->find($id);

var_dump($prod);
 $pr = $em->getRepository("MainBundle:Product")->find($prod);

            $pr->setVenteflash($v);
            $em->persist($pr);
            $em->flush();






        return $this->redirectToRoute('venteflash_index1', array('id' => $id,'operation' => 1,));

    }
    public  function deletefromvente1Action (Request $request,$id,$prod){
        $em=$this->getDoctrine()->getEntityManager();
        $pr = $em->getRepository("MainBundle:Product")->find($prod);
        echo"emcho,,,,,,,,,,,,,,,,,";
        $pr->setVenteflash(NULL);
        $em->persist($pr);
        $em->flush();


        return $this->redirectToRoute('venteflash_index1', array('id' => $id,'operation' => 0,));




    }


    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();

        $venteFlashes = $em->getRepository('MainBundle:VenteFlash')->FindAll();

        return $this->render('venteflash/list.html.twig', array(
            'venteFlashes' => $venteFlashes,
        ));
    }

    /**
     * Creates a new venteFlash entity.
     *
     */
    public function newAction(Request $request)
    {
        $venteFlash = new Venteflash();

        $form = $this->createForm('MainBundle\Form\VenteFlashType', $venteFlash);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $user = $this->getUser();

            $venteFlash->setVendeur($user);


            $em->persist($venteFlash);
            $em->flush($venteFlash);

            return $this->redirectToRoute('venteflash_show', array('id' => $venteFlash->getId()));
        }

        return $this->render('venteflash/new.html.twig', array(
            'venteFlash' => $venteFlash,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a venteFlash entity.
     *
     */
    public function showAction(VenteFlash $venteFlash)
    {
        $deleteForm = $this->createDeleteForm($venteFlash);

        return $this->render('venteflash/show.html.twig', array(
            'venteFlash' => $venteFlash,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing venteFlash entity.
     *
     */
    public function editAction(Request $request, VenteFlash $venteFlash)
    {
        $deleteForm = $this->createDeleteForm($venteFlash);
        $editForm = $this->createForm('MainBundle\Form\VenteFlashType', $venteFlash);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('venteflash_edit', array('id' => $venteFlash->getId()));
        }

        return $this->render('venteflash/edit.html.twig', array(
            'venteFlash' => $venteFlash,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a venteFlash entity.
     *
     */
    public function deleteAction($id)
    {         var_dump($id);

        $em = $this->getDoctrine()->getEntityManager();
        $mag = $em->getRepository('MainBundle:VenteFlash')->find($id);

        $em->remove($mag);
        $em->flush();
        return $this->redirectToRoute('venteflash_index');

    }

    /**
     * Creates a form to delete a venteFlash entity.
     *
     * @param VenteFlash $venteFlash The venteFlash entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(VenteFlash $venteFlash)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('venteflash_delete', array('id' => $venteFlash->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
}
