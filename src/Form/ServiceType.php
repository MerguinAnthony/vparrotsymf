<?php

namespace App\Form;

use App\Entity\VparService;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ServiceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre',
                'attr' => [
                    'class' => 'form-control bg-secondary-subtle rounded-0 mb-3',
                ],
            ])
            ->add('text', TextareaType::class, [
                'label' => 'Paragraphe',
                'attr' => [
                    'rows' => 10,
                    'cols' => 40,
                    'class' => 'form-control bg-secondary-subtle rounded-0 mb-3',
                ],
            ])
            ->add('imageFile', VichImageType::class, [
                'label' => 'Image',
                'required' => false,
                'attr' => [
                    'class' => 'form-control bg-secondary-subtle rounded-0 mb-3',
                ],
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Ajouter',
                'attr' => [
                    'class' => 'btn btn-primary rounded-0 my-3 mx-auto d-block',
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => VparService::class,
        ]);
    }
}
