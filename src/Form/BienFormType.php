<?php

namespace App\Form;

use App\Entity\Bien;
use App\Entity\TypeBien;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class BienFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('description', TextareaType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => "veuillez préciser le titre"
                ],
                'required'=>false,
            ])
            ->add('situation_geographique', TextareaType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => "veuillez préciser le titre"
                ],
                'required'=>false,
            ])
            ->add('superficie', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => "veuillez préciser le titre"
                ],
                'required'=>false,
            ])
            ->add('montant_bien', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => "veuillez préciser le titre"
                ],
                'required'=>false,
            ])
            ->add('nbre_pieces', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => "veuillez préciser le titre"
                ],
                'required'=>false,
            ])
            ->add('nbre_chbres', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => "veuillez préciser le titre"
                ],
                'required'=>false,
            ])
            ->add('nbre_salon', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => "veuillez préciser le titre"
                ],
                'required'=>false,
            ])
            ->add('nbre_wc', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => "veuillez préciser le titre"
                ],
                'required'=>false,
            ])
            ->add('nbre_chbre_auto', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => "veuillez préciser le titre"
                ],
                'required'=>false,
            ])
            ->add('nbre_chbre_simple', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => "veuillez préciser le titre"
                ],
                'required'=>false,
            ])
            ->add('nbre_chbre_simple_placards', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => "veuillez préciser le titre"
                ],
                'required'=>false,
            ])
            ->add('nbre_chbre_dressing', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => "veuillez préciser le titre"
                ],
                'required'=>false,
            ])
            ->add('nbre_garage', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => "veuillez préciser le titre"
                ],
                'required'=>false,
            ])
            ->add('nbre_piscine', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => "veuillez préciser le titre"
                ],
                'required'=>false,
            ])
            ->add('cour_avant', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => "veuillez préciser le titre"
                ],
                'required'=>false,
            ])
            ->add('cour_arriere', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => "veuillez préciser le titre"
                ],
                'required'=>false,
            ])
            ->add('image_facade',FileType::class,[
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new Image(['maxSize' => '3024k']),
                ]
                
            ])
            ->add('image_salon',FileType::class,[
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new Image(['maxSize' => '3024k']),
                ]
                
            ])
            ->add('image_cuisine',FileType::class,[
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new Image(['maxSize' => '3024k']),
                ]
                
            ])
            ->add('image_douche_chbre_principale',FileType::class,[
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new Image(['maxSize' => '3024k']),
                ]
                
            ])
            ->add('image_chbre_simple1',FileType::class,[
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new Image(['maxSize' => '3024k']),
                ]
                
            ])
            ->add('image_chbre_simple2',FileType::class,[
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new Image(['maxSize' => '3024k']),
                ]
                
            ])
            ->add('image_chbre_simple3',FileType::class,[
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new Image(['maxSize' => '3024k']),
                ]
                
            ])
            ->add('image_douche_chbre_simple1',FileType::class,[
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new Image(['maxSize' => '3024k']),
                ]
                
            ])
            ->add('image_douche_chbre_simple2',FileType::class,[
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new Image(['maxSize' => '3024k']),
                ]
                
            ])
            ->add('image_douche_chbre_simple3',FileType::class,[
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new Image(['maxSize' => '3024k']),
                ]
                
            ])
            ->add('image_douche_visiteur',FileType::class,[
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new Image(['maxSize' => '3024k']),
                ]
                
            ])
            ->add('video_bien',FileType::class,[
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new Image(['maxSize' => '3024k']),
                ]
                
            ])
            ->add('annee_bien', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => "veuillez préciser le titre"
                ],
                'required'=>false,
            ])
            ->add('etat_bien', ChoiceType::class, [
                'choices' => [
                  'En ligne' => true,
                  'Hors ligne' => false,
                ],
                'attr'=>[
                  'class'=>'form-control'
                ],
            ])
            //->add('date_saisie')
            //->add('date_modification')
            //->add('id_user_saisie')
            ->add('id_statut', EntityType::class, [
                'class' => TypeBien::class,
                'placeholder' => 'Choisir un statut',
                'attr' => [
                    'class' => 'form-control'

                ],
                'label' => 'statut bien'
            ])
            ->add('id_type_bien', EntityType::class, [
                'class' => TypeBien::class,
                'placeholder' => 'Choisir un type de bien',
                'attr' => [
                    'class' => 'form-control'

                ],
                'label' => 'Type de bien'
            ])
            ->add('id_ville', EntityType::class, [
                'class' => Ville::class,
                'placeholder' => 'Choisir une Ville',
                'attr' => [
                    'class' => 'form-control'

                ],
                'label' => 'libelle ville'
            ])
            //->add('id_user')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Bien::class,
        ]);
    }
}
