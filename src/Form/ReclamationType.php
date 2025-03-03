<?php

namespace App\Form;

use App\Entity\Reclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('type', ChoiceType::class, [
            'label' => 'Type de réclamation',
            'choices' => [
                'Produit' => 'Produit',
                'Service' => 'Service',
                'Commende' => 'Commende',
                'Autre' => 'Autre',
            ],
            'constraints' => [
                new Assert\NotBlank(['message' => 'Le type de réclamation est requis.']),
            ],
            'placeholder' => 'Choisissez le type de réclamation',
        ]);

        $builder->add('descriptionRec', TextareaType::class, [
            'label' => 'Description',
            'constraints' => [
                new Assert\NotBlank(['message' => 'La description ne peut pas être vide.']),
                new Assert\Length([
                    'min' => 10,
                    'minMessage' => 'La description doit contenir au moins 10 caractères.',
                    'max' => 1000,
                    'maxMessage' => 'La description ne peut pas dépasser 1000 caractères.',
                ]),
            ],
            'attr' => [
                'placeholder' => 'Décrivez votre réclamation en détail...',
                'rows' => 5,
            ],
            'trim' => true,
        ]);

        // Afficher statRec seulement si l'option 'is_admin' est activée
        if (!empty($options['is_admin']) && $options['is_admin'] === true) {
            $builder->add('statRec', ChoiceType::class, [
                'label' => 'Statut',
                'choices' => [
                    'En attente' => 'en attente',
                    'Résolu' => 'résolu',
                    'En cours' => 'en cours',
                ],
                'expanded' => true, // Affiche sous forme de boutons radio
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le statut de la réclamation est requis.']),
                    new Assert\Choice([
                        'choices' => ['en attente', 'résolu', 'en cours'],
                        'message' => 'Veuillez choisir un statut valide.',
                    ]),
                ],
                'data' => 'en attente', // Valeur par défaut
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
            'attr' => ['novalidate' => 'novalidate'], // Désactive la validation HTML5
            'is_admin' => false, // Valeur par défaut: utilisateur normal
        ]);
    }
}
