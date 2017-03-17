<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Test\FormInterface;
use Symfony\Component\Validator\Constraints\CallbackValidator;
use Symfony\Component\Form\FormError;

class TutorialType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title_stu', TextType::class, array(
                'required' => true,
                'attr' => array(
                    'placeholder' => 'Titre',
                    'class' => 'form-control'
                ),
                'label' => false
            )
        );
        $builder->add('description_stu', TextType::class, array(
                'required' => true,
                'attr' => array(
                    'placeholder' => 'Description',
                    'class' => 'form-control'
                ),
                'label' => false
            )
        );

        $builder->add('TutosCategories', 'entity', array(
            'required' => true,
            'attr' => array(
                'placeholder' => 'Titre',
                'class' => 'form-control'
            ),
            'label' => false,
            'class' => 'AppBundle:Share_categories',
            'query_builder' => function ($repository) {
                return $repository->createQueryBuilder('p')->orderBy('p.id', 'ASC');
            },
            'property' => 'name_sca',
        ));

        $builder->add('content_stu', TextareaType::class, array(
                'required' => true,
                'attr' => array(
                    'class' => 'form-control'
                ),
                'label' => false
            )
        );

        $builder->add('file', FileType::class, array(
                'label' => false,
                'mapped' => false,
                'required' => false,
                'property_path' => null,
                'multiple' => true
            )
        );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Share_tutos',
        ));
    }
}
