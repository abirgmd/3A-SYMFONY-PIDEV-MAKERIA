<?php

namespace App\Form;

use App\Entity\Evaluation;
use App\Entity\Produit;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class EvaluationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('userName', TextType::class, [
                'label' => 'Nom d\'utilisateur',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le nom d\'utilisateur ne peut pas être vide']),
                    new Assert\Length([
                        'min' => 3,
                        'minMessage' => 'Le nom d\'utilisateur doit contenir au moins 3 caractères',
                    ]),
                ],
            ])
            ->add('userMail', EmailType::class, [
                'label' => 'Email',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'L\'email ne peut pas être vide']),
                    new Assert\Email(['message' => 'Veuillez entrer un email valide']),
                    new Assert\Regex([
                        'pattern' => '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/',
                        'message' => 'L\'email doit être sous le format prenom.nom@esprit.tn',
                    ]),
                ],
            ])
            ->add('reviewText', TextareaType::class, [
                'label' => 'Votre évaluation',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le texte de l\'évaluation ne peut pas être vide']),
                    new Assert\Length([
                        'min' => 10,
                        'minMessage' => 'L\'évaluation doit contenir au moins 10 caractères',
                    ]),
                ],
            ])
            ->add('note', IntegerType::class, [
                'label' => 'Note',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'La note ne peut pas être vide']),
                    new Assert\Range([
                        'min' => 1,
                        'max' => 5,
                        'notInRangeMessage' => 'La note doit être comprise entre 1 et 5',
                    ]),
                ],
            ])
            ->add('datePublication', DateType::class, [
                'label' => 'Date de publication',
                'widget' => 'single_text',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'La date de publication ne peut pas être vide']),
                    new Assert\GreaterThanOrEqual([
                        'value' => 'today',
                        'message' => 'La date de publication ne peut pas être dans le passé',
                    ]),
                ],
            ])
            ->add('produit', EntityType::class, [
                'label' => 'Produit',
                'class' => Produit::class,
                'choice_label' => 'id', // Change to a more user-friendly property if needed (e.g., 'name')
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez sélectionner un produit']),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evaluation::class,
        ]);
    }
}
