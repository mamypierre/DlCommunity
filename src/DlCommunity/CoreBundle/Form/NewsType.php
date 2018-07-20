<?php

namespace DlCommunity\CoreBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NewsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('newsName',TextType::class, array('label'=>'Titre de la news :',))
            ->add('description',TextType::class, array('label'=>'Description :',))
            ->add('user', EntityType::class, array('class'=>'DlCommunity\CoreBundle\Entity\User',
                'choice_label'=>'pseudo','expanded'=>false,'multiple'=>false,'label'=>'Utilisateur :',))
            ->add('picture',EntityType::class, array('class'=>'DlCommunity\CoreBundle\Entity\Picture',
                'choice_label'=>'title','expanded'=>false,'multiple'=>false,'label'=>'Image :',));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DlCommunity\CoreBundle\Entity\News'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dlcommunity_corebundle_news';
    }


}
