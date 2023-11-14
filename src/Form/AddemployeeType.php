<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AddemployeeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', TextType::class, [
                'label' => 'E-mail',
                'attr' => [
                    'class' => 'form-control email bg-secondary-subtle rounded-0 mb-3',
                ],
            ])
            ->add('plainPassword', TextType::class, [
                'label' => 'Mot de passe',
                'attr' => [
                    'class' => 'form-control password bg-secondary-subtle rounded-0 mb-3',
                ],

            ])
            ->add('lastname', TextType::class, [
                'label' => 'Nom',
                'attr' => [
                    'class' => 'form-control lastname bg-secondary-subtle rounded-0 mb-3',
                ],

            ])
            ->add('firstname', TextType::class, [
                'label' => 'Prénom',
                'attr' => [
                    'class' => 'form-control firstname bg-secondary-subtle rounded-0 mb-3',
                ],

            ])
            ->add('function', TextType::class, [
                'label' => 'Poste de travail',
                'attr' => [
                    'class' => 'form-control function bg-secondary-subtle rounded-0 mb-3',
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
            'data_class' => User::class,
        ]);
    }
}
