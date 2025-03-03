<?php

namespace App\Form;

use App\Entity\Commande;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\GreaterThan;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
class CommandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date', DateType::class, [
                'widget' => 'single_text',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'La date de publication ne peut pas être vide']),
                    new Assert\GreaterThanOrEqual([
                        'value' => 'today',
                        'message' => 'La date de publication ne peut pas être dans le passé',
                    ]),
                ],
            ])
            ->add('prix', NumberType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Le prix est requis'
                    ]),
                    new GreaterThan([
                        'value' => 0,
                        'message' => 'Le prix doit être supérieur à 0'
                    ])
                ]
            ])
            ->add('etat_commande', ChoiceType::class, [
                'choices' => [
                    'En attente' => 0,
                    'En cours' => 1,
                    'Terminée' => 2
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'L\'état de la commande est requis'
                    ])
                ]
            ])
            ->add('methode_paiement', ChoiceType::class, [
                'choices' => [
                    'Carte de crédit' => 'carte_credit',
                    'Virement' => 'virement',
                    'Espèces' => 'especes'
                ]
            ])
            ->add('pourcentage_don', NumberType::class, [
                'constraints' => [
                    new Range([
                        'min' => 0,
                        'max' => 100,
                        'notInRangeMessage' => 'Le pourcentage de don doit être entre 0 et 100%'
                    ])
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Commande::class,
        ]);
    }
}