<?php

namespace Jimmy\GymBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username')
            //->add('usernameCanonical')
            ->add('email')
            //->add('emailCanonical')
            //->add('enabled')
            //->add('salt')
            ->add('password')
            //->add('lastLogin')
            //->add('locked')
            //->add('expired')
            //->add('confirmationToken')
            //->add('passwordRequestedAt')
            ->add('roles')
            //->add('credentialsExpired')
            ->add('full_name')
            ->add('birth_date')
            ->add('address')
            ->add('sex')
            ->add('contact_no')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jimmy\GymBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gym_user';
    }
}
