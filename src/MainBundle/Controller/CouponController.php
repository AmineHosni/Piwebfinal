<?php

namespace MainBundle\Controller;

use MainBundle\Entity\Coupon;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Coupon controller.
 *
 */
class CouponController extends Controller
{
    /**
     * Lists all coupon entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $id_user = $this->get('security.token_storage')->getToken()->getUser();
        $coupons = $em->getRepository('MainBundle:Coupon')->findCoupon($id_user);

        return $this->render('coupon/index.html.twig', array(
            'coupons' => $coupons,
        ));
    }

    /**
     * Creates a new coupon entity.
     *
     */
    public function newAction(Request $request)
    {
        $coupon = new Coupon();
        $form = $this->createForm('MainBundle\Form\CouponType', $coupon);
        $form->handleRequest($request);
        $id_user = $this->get('security.token_storage')->getToken()->getUser();

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $coupon->setStatut(0);
            $coupon->_setUtilisateurId($id_user);
            $em->persist($coupon);
            $em->flush($coupon);

            return $this->redirectToRoute('coupon_show', array('id' => $coupon->getId()));
        }

        return $this->render('coupon/new.html.twig', array(
            'coupon' => $coupon,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a coupon entity.
     *
     */
    public function showAction(Coupon $coupon)
    {
        $deleteForm = $this->createDeleteForm($coupon);

        return $this->render('coupon/show.html.twig', array(
            'coupon' => $coupon,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing coupon entity.
     *
     */
    public function editAction(Request $request, Coupon $coupon)
    {
        $deleteForm = $this->createDeleteForm($coupon);
        $editForm = $this->createForm('MainBundle\Form\CouponModifier', $coupon);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->merge($coupon);
            $em->flush();

            return $this->redirectToRoute('coupon_edit', array('id' => $coupon->getId()));
        }

        return $this->render('coupon/edit.html.twig', array(
            'coupon' => $coupon,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a coupon entity.
     *
     */
    public function deleteAction(Request $request, Coupon $coupon)
    {
        $form = $this->createDeleteForm($coupon);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($coupon);
            $em->flush($coupon);
        }

        return $this->redirectToRoute('coupon_index');
    }

    /**
     * Creates a form to delete a coupon entity.
     *
     * @param Coupon $coupon The coupon entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Coupon $coupon)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('coupon_delete', array('id' => $coupon->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
    public function printAction(Request $request,$id)
    {
        $em= $this->getDoctrine()->getManager();
        $modele=$em->getRepository("MainBundle:Coupon")->find($id);
        $modele->setQte($modele->getQte()-1);
        $em->persist($modele);
        $em->flush();
        return $this->render('coupon/print.html.twig',
            array('modeles' => $modele));
    }
    public function testAction()
    {

        return $this->render('MainBundle:Default:indexad.html.twig');
    }
    public function affautoriserAction()
    {

        $em= $this->getDoctrine()->getManager();
        $modele=$em->getRepository("MainBundle:User")->findAll();
        return $this->render('MainBundle:Default:CouponAutoriser.html.twig',
            array('modeles' => $modele));
    }
    public function AccepterAction(Request $request,$id)
    {   $em= $this->getDoctrine()->getManager();
        $modele=$em->getRepository("MainBundle:User")->find($id);
        $modele->setStatutcoupon(1);
        $em->persist($modele);
        $em->flush();
        return $this->redirect($this->generateUrl('aff_autoriser_coupon')) ;

    }
    public function refuserAction(Request $request,$id)
    {   $em= $this->getDoctrine()->getManager();
        $modele=$em->getRepository("MainBundle:User")->find($id);
        $modele->setStatutcoupon(0);
        $em->persist($modele);
        $em->flush();
        return $this->redirect($this->generateUrl('aff_autoriser_coupon')) ;

    }
    public function listescouponAction()
    {
        $em= $this->getDoctrine()->getManager();
        $modele=$em->getRepository("MainBundle:Coupon")->findAll();
        return $this->render('MainBundle:Default:couponlist.html.twig',
            array('modeles' => $modele));

    }
}

