<?php

namespace App\Form;

use App\Entity\Session;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class SessionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('libelle', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form',
                    'placeholder' => 'Libelle'
                ],
            ])
            ->add('dateDebut', DateType::class, [
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'formMiddle',
                ],
            ])
            ->add('dateFin', DateType::class, [
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'formMiddle',
                ],
            ])
            ->add('nbDePlace', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form',
                    'placeholder' => 'Nombre de place'
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
            'data_class' => Session::class,
        ]);
    }
}
