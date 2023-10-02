<?php

namespace App\Form;

use App\Entity\Stagiaire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class StagiaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'formMiddle',
                    'placeholder' => 'Nom'
                ],
            ])
            ->add('prenom', TextType::class , [
                'label' => false,
                'attr' => [
                    'class' => 'formMiddle',
                    'placeholder' => 'Prenom'
                ],
            ])
            ->add('email', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form',
                    'placeholder' => 'Email'
                ],
            ])
            ->add('ville', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form',
                    'placeholder' => 'Ville'
                ],
            ])
            ->add('sexe', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'formMiddle',
                    'placeholder' => 'Sexe',
                ],
            ])
            ->add('dateDeNaissance', DateType::class, [
                'label' => false,
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'formMiddle',
                ],
            ])
            ->add('telephone', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form',
                    'placeholder' => 'Telephone'
                ],
            ])
            ->add('picture', FileType::class, [
                'label' => false,
                'data_class' => null,
                'attr' => [
                    'class' => 'formPicture',
                ],
            ])
            ->add('Ajouter', SubmitType::class, [
                'attr' => [
                    'class' => 'formSubmit',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Stagiaire::class,
        ]);
    }
}
