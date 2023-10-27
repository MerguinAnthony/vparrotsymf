<?php

namespace App\Form;

use App\Entity\VparHour;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;

class SchedulesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('monday', TimeType::class, [
                'label' => 'Lundi',
            ])
            ->add('tuesday', TimeType::class, [
                'label' => 'Mardi',
            ])
            ->add('wednesday', TimeType::class, [
                'label' => 'Mercredi',
            ])
            ->add('thursday', TimeType::class, [
                'label' => 'Jeudi',
            ])
            ->add('friday', TimeType::class, [
                'label' => 'Vendredi',
            ])
            ->add('saturday', TimeType::class, [
                'label' => 'Samedi',
            ])
            ->add('sunday', TimeType::class, [
                'label' => 'Dimanche',
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
