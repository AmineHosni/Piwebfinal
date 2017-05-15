<?php

namespace MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Vich\UploaderBundle\Form\Type\VichImageType;

class CouponModifier extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('Description')
            ->add('Qte',NumberType::class)
            ->add('tauxreduction')
            ->add('date_deb', DateType::Class, array('widget' => 'single_text'))
            ->add('date_fin', DateType::Class, array('widget' => 'single_text'))
            ->add('imageFile', VichImageType::class,  [
                'required' => true, 'allow_delete' => false, // not mandatory, default is true
                'download_link' => true,
            ]);

    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MainBundle\Entity\Coupon'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'mainbundle_coupon';
    }


}
