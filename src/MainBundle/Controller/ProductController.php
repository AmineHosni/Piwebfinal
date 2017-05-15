<?php

namespace MainBundle\Controller;

use  MainBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use DateTimeImmutable;
use MainBundle\Repository\ProductRepository;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Product controller.
 *
 */
class ProductController extends Controller
{




    /**
     * Lists all product entities.
     *
     */
    public function indexAction()
    {
        $datenow=new \DateTimeImmutable();
        $datenowStringType = $datenow->format('Y-m-d');

        $em= $this->getDoctrine()->getManager();
        $products= $em->getRepository('MainBundle:Product')->findAll();


        foreach ($products as $produit){

            $CreatedDate=$produit->getCreatedDate();
            $CreatedDate_StringType = $CreatedDate->format('Y-m-d');

            $duree='+'.$produit->getDuree();
            $date_fin_duree = date('Y-m-d', strtotime($CreatedDate_StringType.$duree));
            if ( strtotime($datenowStringType)>strtotime($date_fin_duree) )
            {

                $em->remove($produit);
                $em->flush($produit);
            }

        }

        $newproducts= $em->getRepository('MainBundle:Product')->findAll();
        $categotie= $em->getRepository('MainBundle:Categorie')->findAll();

        return $this->render('product/listContent.html.twig', array(
            'products' => $newproducts,'categorie'=>$categotie
        ));
    }


    public function indexmeAction()
    {
        $datenow=new \DateTimeImmutable();
        $datenowStringType = $datenow->format('Y-m-d');

        $em= $this->getDoctrine()->getManager();
        $user=$this->getUser();
        $products= $em->getRepository('MainBundle:Product')->findBy( array('Seller' => $user ));
        return $this->render('product/index.html.twig', array(
            'products' => $products
        ));



    }

    /**
     * Creates a new product entity.
     *
     */
    public function newAction(Request $request)
    {


        $product = new Product();
        $form = $this->createForm('MainBundle\Form\ProductType', $product);
        $form->handleRequest($request);
        $product->setCreatedDate(new DateTimeImmutable());

        if ($form->isSubmitted() && $form->isValid()) {

            $id_user = $this->get('security.token_storage')->getToken()->getUser();


            $product->setSeller($id_user);
            $product->setApprouver('En Attente');

            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush($product);


            return $this->redirectToRoute('product_show', array('id' => $product->getId()));
        }

        return $this->render('product/new.html.twig', array(
            'product' => $product,
            'form' => $form->createView(),
        ));
    }


    public function projetajaxAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $categorieid = $request->get('categorie');
        if ($categorieid==""){
            $entities = $em->getRepository('MainBundle:Product')->findAll();



            }
        else{
        $categoties= $em->getRepository('MainBundle:Categorie')->find($categorieid);

        $entities = $em->getRepository('MainBundle:Product')->findBy(array('Categorie' => $categoties));}

        return $this->render(':product:boucle.html.twig', array(
            'products'=>$entities,
        ));


}



    public function showAction(Product $product)
    {
        $deleteForm = $this->createDeleteForm($product);




        return $this->render('product/show.html.twig', array(
            'product' => $product,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing product entity.
     *
     */
    public function editAction(Request $request, Product $product)
    {
        $deleteForm = $this->createDeleteForm($product);
        $editForm = $this->createForm('MainBundle\Form\ProductType', $product);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('product_edit', array('id' => $product->getId()));
        }

        return $this->render('product/edit.html.twig', array(
            'product' => $product,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a product entity.
     *
     */
    public function deleteAction(Request $request, Product $product)
    {
        $form = $this->createDeleteForm($product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($product);
            $em->flush($product);
        }

        return $this->redirectToRoute('product_index');
    }


    /**
     * Creates a form to delete a product entity.
     *
     * @param Product $product The product entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Product $product)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('product_delete', array('id' => $product->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
    public function listAction()
    {


        $datedepart = date("Y-m-d", strtotime("-1 week"));


        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('ProductBundle:Product')
            ->findAll();
        $pr = array();

        foreach ($products as $product)
            if ($product->getCreatedDate() > $datedepart){
                $em->remove($product);
                $em->flush();
            }
        return $this->render('product/index.html.twig', array(
            'products' => $pr,
        ));
    }







    /*
    public function findAllAction()
    {
        $em=$this->getDoctrine()->getManager();
        $products=$em->getRepository("ProductBundle:Product")->findAll();
        return ($this->render("ProductBundle:Product:show.html.twig",array("products"=>$products)));
    }*/
}
