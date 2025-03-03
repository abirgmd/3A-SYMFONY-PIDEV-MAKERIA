<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Entity\Produit;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('datePromotion', DateTimeType::class, [
            'widget' => 'single_text',
            'required' => false,
        ])
        ->add('reduction', NumberType::class, [
            'required' => false,
        ])
            ->add('nomprod', null, [
                'label' => 'Nom du produit',
            ])
            ->add('descriptionprod', null, [
                'label' => 'Description du produit',
            ])
            ->add('prixprod', null, [
                'label' => 'Prix du produit',
            ])
            ->add('nombreProduitsEnStock', null, [
                'label' => 'Nombre en stock',
            ])
            ->add('sizeprod', null, [
                'label' => 'Taille du produit',
            ])
            ->add('avantages', null, [
                'label' => 'Avantages du produit',
            ])
            ->add('image_large', null, [
                'label' => 'Image principale',
            ])
            ->add('image_small1', null, [
                'label' => 'Image secondaire 1',
            ])
            ->add('image_small2', null, [
                'label' => 'Image secondaire 2',
            ])
            ->add('image_small3', null, [
                'label' => 'Image secondaire 3',
            ])
            ->add('categorie', EntityType::class, [
                'label' => 'Catégorie',
                'class' => Categorie::class,
                'choice_label' => 'id', // Change to a more user-friendly property if needed (e.g., 'name')
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
