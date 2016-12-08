<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('username_sha', TextType::class, array(
                'required' => true,
                'attr' => array(
                    'placeholder' => 'Pseudonyme',
                    'class' => 'form-control',
                ),
                'label' => false)
        );

        $builder->add('password_sha', RepeatedType::class, array(
                'required' => true,
                'type' => 'password',
                'first_options' => array(
                    'attr' => array(
                        'placeholder' => 'Mot de passe',
                        'class' => 'form-control'
                    ),
                    'label' => false
                ),
                'second_options' => array(
                    'required' => true,
                    'label' => false,
                    'attr' => array(
                        'placeholder' => 'Confirmer le mot de passe',
                        'class' => 'form-control'
                    )
                ),
                'invalid_message' => 'Confirmation de mot de passe incorrect',
            )
        );

        $builder
            ->add('email_sha', EmailType::class, array(
                    'required' => true,
                    'label' => false,
                    'attr' => array(
                        'placeholder' => 'Email',
                        'class' => 'form-control'
                    )
                )
            );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Share_users',
        ));
    }
}
