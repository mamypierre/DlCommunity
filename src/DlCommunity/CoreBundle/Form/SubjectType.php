<?php

namespace DlCommunity\CoreBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SubjectType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('subjectName', TextType::class)
            ->add('sub_category', EntityType::class, array
            ('class'=>'DlCommunity\CoreBundle\Entity\Sub_category',
                'choice_label'=>'subCategoryName',
                'expanded'=>false,'multiple'=>false,
                'label'=>'Sous-Catégorie :'))
            ->add('user', EntityType::class, array
            ('class'=>'DlCommunity\CoreBundle\Entity\User',
                'choice_label'=>'pseudo',
                'expanded'=>false,'multiple'=>false,
                'label'=>'Pseudo :'));
    }/**;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DlCommunity\CoreBundle\Entity\Subject'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dlcommunity_corebundle_subject';
    }


}
