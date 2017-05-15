<?php

namespace MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LivraisonType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('methLivraison', ChoiceType::class, array(
    'choices' => array('Aramex' => 'Aramex', 'Poste' => 'Poste'),'expanded' => true , 'required' => true
))
        ->add('adresseLiv',TextareaType::class)
        ->add('telephoneUser')
        ->add('codepostaleUser')
        ->add('delegationUser', ChoiceType::class, array(
    'choices' => array('Sousse' => 'Sousse', 'tunis' => 'tunis')
))
        ->add('gouvernoratUser')
        ->add('Ajouter', SubmitType::class);
      
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MainBundle\Entity\Livraison'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'mainbundle_livraison';
    }


}
