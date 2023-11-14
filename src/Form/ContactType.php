<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('lastname', TextType::class, [
                'label' => 'Nom',
                'attr' => [
                    'class' => 'form-control bg-secondary-subtle rounded-0 mb-3',
                ],
            ])
            ->add('firstname', TextType::class, [
                'label' => 'Prénom',
                'attr' => [
                    'class' => 'form-control bg-secondary-subtle rounded-0 mb-3',
                ],
            ])
            ->add('phone', TelType::class, [
                'label' => 'Téléphone',
                'attr' => [
                    'class' => 'form-control bg-secondary-subtle rounded-0 mb-3',
                ],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email *',
                'attr' => [
                    'class' => 'form-control bg-secondary-subtle rounded-0 mb-3',
                ],
            ])
            ->add('subject', TextType::class, [
                'label' => 'Sujet *',
                'attr' => [
                    'class' => 'form-control bg-secondary-subtle rounded-0 mb-3',
                ],
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Message *',
                'attr' => [
                    'class' => 'form-control bg-secondary-subtle rounded-0 mb-3',
                    'cols' => 6,
                    'rows' => 6,
                ],
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Envoyer mon message',
                'attr' => [
                    'class' => 'btn btn-primary rounded-0 my-3 mx-auto d-block',
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
