<?php

namespace App\Form;

use App\Entity\Bien;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BienFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('description')
            ->add('situation_geographique')
            ->add('superficie')
            ->add('montant_bien')
            ->add('nbre_pieces')
            ->add('nbre_chbres')
            ->add('nbre_salon')
            ->add('nbre_wc')
            ->add('nbre_chbre_auto')
            ->add('nbre_chbre_simple')
            ->add('nbre_chbre_simple_placards')
            ->add('nbre_chbre_dressing')
            ->add('nbre_garage')
            ->add('nbre_piscine')
            ->add('cour_avant')
            ->add('cour_arriere')
            ->add('image_facade')
            ->add('image_salon')
            ->add('image_cuisine')
            ->add('image_douche_chbre_principale')
            ->add('image_chbre_simple1')
            ->add('image_chbre_simple2')
            ->add('image_chbre_simple3')
            ->add('image_douche_chbre_simple1')
            ->add('image_douche_chbre_simple2')
            ->add('image_douche_chbre_simple3')
            ->add('image_douche_visiteur')
            ->add('video_bien')
            ->add('annee_bien')
            ->add('etat_bien')
            ->add('date_saisie')
            ->add('date_modification')
            ->add('id_user_saisie')
            ->add('id_statut')
            ->add('id_type_bien')
            ->add('id_ville')
            ->add('id_user')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Bien::class,
        ]);
    }
}
