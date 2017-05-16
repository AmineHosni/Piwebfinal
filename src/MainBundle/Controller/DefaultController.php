<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \SplFixedArray;
class DefaultController extends Controller
{
    public function indexAction()
    {
        $em= $this->getDoctrine()->getManager();
        $modele=$em->getRepository("MainBundle:Coupon")->findAll();
        $product=$em->getRepository("MainBundle:Product")->findAll();
        if (sizeof($modele)> 4) {
            $arrays = new SplFixedArray(4);
            $arrays[0] = $modele[0];
            $arrays[1] = $modele[1];
            $arrays[2] = $modele[2];
            $arrays[3] = $modele[3];
            
            
            return $this->render('MainBundle:Default:index.html.twig',
         array('modeles' => $arrays,'products' => $product));
        }else{
        return $this->render('MainBundle:Default:index.html.twig',
         array('modeles' => $modele,'products' => $product));
    }}
}
