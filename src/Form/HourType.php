<?php

namespace App\Form;

use App\Entity\VparHour;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;

class HourType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('monday', TimeType::class, [
                'label' => 'Lundi :',
                'attr' => [
                    'class' => 'rounded-0 my-3',
                ],
            ])
            ->add('tuesday', TimeType::class, [
                'label' => 'Mardi :',
                'attr' => [
                    'class' => 'rounded-0 my-3',
                ],
            ])
            ->add('wednesday', TimeType::class, [
                'label' => 'Mercredi :',
                'attr' => [
                    'class' => 'rounded-0 my-3',
                ],
            ])
            ->add('thursday', TimeType::class, [
                'label' => 'Jeudi :',
                'attr' => [
                    'class' => 'rounded-0 my-3',
                ],
            ])
            ->add('friday', TimeType::class, [
                'label' => 'Vendredi :',
                'attr' => [
                    'class' => 'rounded-0 my-3',
                ],
            ])
            ->add('saturday', TimeType::class, [
                'label' => 'Samedi :',
                'attr' => [
                    'class' => 'rounded-0 my-3',
                ],
            ])
            ->add('sunday', TimeType::class, [
                'label' => 'Dimanche :',
                'attr' => [
                    'class' => 'rounded-0 my-3',
                ],
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Valider',
                'attr' => [
                    'class' => 'btn btn-primary rounded-0 my-3 mx-auto d-block',
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
