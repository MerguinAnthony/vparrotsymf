<?php

namespace App\Form;

use App\Entity\VparHour;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class HourType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('hours', TextType::class, [
                'label' => 'Heures d\'ouverture',
                'attr' => [
                    'class' => 'form-control rounded-0 my-3 mx-auto d-block',
                ],
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Modifier',
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
