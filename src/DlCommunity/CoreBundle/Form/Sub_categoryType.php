<?php

namespace DlCommunity\CoreBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Sub_categoryType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('subCategoryName',TextType::class)
            ->add('subCategoryDescription',TextType::class)
            ->add('category',EntityType::class, array
            ('class'=>'DlCommunity\CoreBundle\Entity\Category',
                'choice_label'=>'categoryName',
                'expanded'=>false,'multiple'=>false,
                'label'=>'Categorie :',))
            ->add('picture', EntityType::class, array
            ('class'=>'DlCommunity\CoreBundle\Entity\Picture',
                'choice_label'=>'title',
                'expanded'=>false,'multiple'=>false,
                'label'=>'Image :'));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DlCommunity\CoreBundle\Entity\Sub_category'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dlcommunity_corebundle_sub_category';
    }


}
