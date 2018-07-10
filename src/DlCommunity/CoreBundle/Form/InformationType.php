<?php

namespace DlCommunity\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class InformationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('lastName', \Symfony\Component\Form\Extension\Core\Type\TextType::class)
                ->add('firstName',  \Symfony\Component\Form\Extension\Core\Type\TextType::class )
                ->add('trainingStart', \Symfony\Component\Form\Extension\Core\Type\DateTimeType::class)
                ->add('trainingEnd',\Symfony\Component\Form\Extension\Core\Type\DateTimeType::class )                
                ->add('information_status', EntityType::class, array(
                    'class'=>'DlCommunity\CoreBundle\Entity\Information_status',
                    'choice_label'=>'statusType',
                    'data'=>$options['info_statu'],
                    'attr'=>array(
                    'hidden' => FALSE)));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DlCommunity\CoreBundle\Entity\Information'
        ));
        
        $resolver->setRequired(array('info_statu'));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dlcommunity_corebundle_information';
    }


}
