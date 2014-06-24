<?php

namespace BionicUniversity\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsersRegistrationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email', 'email', array(
                'label' => 'Ваш Email',
                'attr' => array(
                    'placeholder' => 'Адрес электронной почты',
                    'class' => 'reg1',
                ),
                'label_attr' => array('class' => 'regb1')
            ));
        $builder->add('password', 'repeated', array(
                'type' => 'password',
                'invalid_message' => 'The password fields must match.',
                'options' => array(
                    'attr' => array('class' => 'password-field',
                    'placeholder' => 'Пароль')),
                'required' => true,
                'first_options'  => array('label' => 'Пароль','label_attr' => array('class' => 'regb2')),
                'second_options' => array('label' => 'Повторите пароль','label_attr' => array('class' => 'regb2')),
            ));
        $builder->add('Register', 'submit',
            array(
                'label' => 'Регистрация',
                'attr' => array('class' => 'reg4')
            ));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
                'data_class' => 'BionicUniversity\UserBundle\Entity\User'
            ));
    }

    public function getName()
    {
        return 'registration';
    }
}