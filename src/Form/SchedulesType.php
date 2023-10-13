<?php

namespace App\Form;

use App\Entity\VparHour;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class SchedulesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('monday', IntegerType::class, [
                'label' => 'Lundi',
                'attr' => [
                    'min' => 0,
                    'max' => 24,
                ],
            ])
            ->add('tuesday', IntegerType::class, [
                'label' => 'Mardi',
                'attr' => [
                    'min' => 0,
                    'max' => 24,
                ],
            ])
            ->add('wednesday', IntegerType::class, [
                'label' => 'Mercredi',
                'attr' => [
                    'min' => 0,
                    'max' => 24,
                ],
            ])
            ->add('thursday', IntegerType::class, [
                'label' => 'Jeudi',
                'attr' => [
                    'min' => 0,
                    'max' => 24,
                ],
            ])
            ->add('friday', IntegerType::class, [
                'label' => 'Vendredi',
                'attr' => [
                    'min' => 0,
                    'max' => 24,
                ],
            ])
            ->add('saturday', IntegerType::class, [
                'label' => 'Samedi',
                'attr' => [
                    'min' => 0,
                    'max' => 24,
                ],
            ])
            ->add('sunday', IntegerType::class, [
                'label' => 'Dimanche',
                'attr' => [
                    'min' => 0,
                    'max' => 24,
                ],
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Valider',
                'attr' => [
                    'class' => 'btn btn-success',
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => VparHour::class,
        ]);
    }
}
