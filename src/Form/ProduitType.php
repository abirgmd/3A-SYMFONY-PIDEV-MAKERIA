<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Entity\Produit;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomprod', null, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le nom ne peut pas être vide.']),
                    new Assert\Regex([
                        'pattern' => '/^[a-zA-Z\s]+$/',
                        'message' => 'Le nom doit contenir uniquement des lettres.',
                    ]),
                ],
            ])
            ->add('descriptionprod', null, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'La description est obligatoire.']),
                    new Assert\Length([
                        'min' => 10,
                        'max' => 255,
                        'minMessage' => 'La description doit contenir au moins {{ limit }} caractères.',
                        'maxMessage' => 'La description ne peut pas dépasser {{ limit }} caractères.',
                    ]),
                ],
            ])
            ->add('prixprod', null, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le prix est obligatoire.']),
                    new Assert\Positive(['message' => 'Le prix doit être supérieur à zéro.']),
                ],
            ])
            ->add('nombreProduitsEnStock', null, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le stock est obligatoire.']),
                    new Assert\PositiveOrZero(['message' => 'Le stock ne peut pas être négatif.']),
                ],
            ])
            ->add('sizeprod', null, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'La taille est obligatoire.']),
                    new Assert\Regex([
                        'pattern' => '/^\d+(\.\d+)?$/',
                        'message' => 'La taille doit être un nombre valide (e.g., 23, 23.34, 12.5).',
                    ]),
                ],
            ])
            ->add('avantages', null, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Les avantages sont obligatoires.']),
                ],
            ])
            ->add('image_large', null, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'L\'image principale est requise.']),
                    new Assert\Url(['message' => 'L\'URL de l\'image doit être valide.']),
                ],
            ])
            ->add('image_small1', null, [
                'constraints' => [
                    new Assert\Url(['message' => 'L\'URL de l\'image secondaire 1 doit être valide.']),
                ],
            ])
            ->add('image_small2', null, [
                'constraints' => [
                    new Assert\Url(['message' => 'L\'URL de l\'image secondaire 2 doit être valide.']),
                ],
            ])
            ->add('image_small3', null, [
                'constraints' => [
                    new Assert\Url(['message' => 'L\'URL de l\'image secondaire 3 doit être valide.']),
                ],
            ])
            ->add('categorie', EntityType::class, [
                'class' => Categorie::class,
                'choice_label' => 'id',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
