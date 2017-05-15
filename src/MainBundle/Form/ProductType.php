<?php

namespace MainBundle\Form;

use Doctrine\DBAL\Types\TextType;
use  MainBundle\Entity\Categorie;
use  MainBundle\Entity\Product;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ProductType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('libelle')
            ->add('description',TextareaType::class)
            ->add('marque')

            ->add('etat',ChoiceType::class,array('choices'
            => array('etat' => 'Marque de produit','occasion' => 'occasion',
                    'nouveau' => 'nouveau')))

            ->add('categorie',EntityType::class,array(
                'class'=>'MainBundle\Entity\Categorie'
            ,'choice_label'=>'nom'
            ))



            ->add('prixProduit',NumberType::class)
            ->add('quantiteStock')
            ->add('pourcentagePromotion')
            ->add('imageFile', VichImageType::class, [
                'required' => false,
                'allow_delete' => true, // not mandatory, default is true
                'download_link' => true, // not mandatory, default is true
            ])
            ->add('Duree',ChoiceType::class,array('choices'
            => array('15 Days' => '15 Days','30 Days' => '30 Days',
                    '60 Days' => '60 Days')))

        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MainBundle\Entity\Product'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'mainbundle_product';
    }
    public function setDefaultOptions(OptionsResolverInterface $resolver ){
        $resolver->setDefaults(array(
            'data_class'=>'MainBundle\Entity\Product'
        ));
    }
    public function getDefaultOptions(OptionsResolverInterface $resolver ){
        $resolver->setDefaults(array(
            'data_class'=>'MainBundle\Entity\Product'
        ));
    }
}