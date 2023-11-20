<?php

namespace App\Form;

use App\Entity\Statut;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StatutFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('lib_statut', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => "veuillez préciser le titre"
                ],
                'required'=>false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Statut::class,
        ]);
    }
}
