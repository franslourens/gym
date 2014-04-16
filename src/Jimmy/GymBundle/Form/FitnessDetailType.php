<?php

namespace Jimmy\GymBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FitnessDetailType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('capture_date')
            ->add('waist')
            ->add('thigh')
            ->add('upper_arm')
            ->add('bmi')
            ->add('resting_heart_rate')
            ->add('user')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jimmy\GymBundle\Entity\FitnessDetail'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gym_fitnessdetail';
    }
}
