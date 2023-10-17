<?php

namespace App\Form;


use Assert\Length;
use App\Entity\VparVehicle;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class VehiclesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('brand', TextType::class, [
                'label' => 'Marque',
                'attr' => [
                    'class' => 'form-control',
                ]
            ])
            ->add('model', TextType::class, [
                'label' => 'Modèle',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('year', IntegerType::class, [
                'label' => 'Année',
                'attr' => [
                    'class' => 'form-control'
                ],
            ])
            ->add('mileage', IntegerType::class, [
                'label' => 'Kilométrage',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('energy', TextType::class, [
                'label' => 'Energie',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'attr' => [
                    'rows' => 10,
                    'cols' => 40,
                ],
            ])
            ->add('power', IntegerType::class, [
                'label' => 'Puissance',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('fiscalpower', IntegerType::class, [
                'label' => 'Puissance fiscale',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('price', IntegerType::class, [
                'label' => 'Prix',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('image1', VichImageType::class, [
                'label' => 'Image 1',
                'required' => false,
                'attr' => [
                    'class' => 'form-control'
                ],
            ])
            ->add('image2', VichImageType::class, [
                'label' => 'Image 2',
                'required' => false,
                'attr' => [
                    'class' => 'form-control'
                ],
            ])
            ->add('image3', VichImageType::class, [
                'label' => 'Image 3',
                'required' => false,

                'attr' => [
                    'class' => 'form-control'
                ],
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Ajouter',
                'attr' => [
                    'class' => 'addBtn',
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => VparVehicle::class,
        ]);
    }
}
