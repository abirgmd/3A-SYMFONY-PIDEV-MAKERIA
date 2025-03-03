<?php

namespace App\Form;

use App\Entity\Facture;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Constraints\GreaterThan;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Symfony\Component\Validator\Constraints as Assert;
class FactureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date_facture', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date facture',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'La date de publication ne peut pas être vide']),
                    new Assert\GreaterThanOrEqual([
                        'value' => 'today',
                        'message' => 'La date de publication ne peut pas être dans le passé',
                    ]),
                ],
            ])
            ->add('tva', NumberType::class, [
                'constraints' => [
                    new Range([
                        'min' => 0,
                        'max' => 100,
                        'notInRangeMessage' => 'La TVA doit être comprise entre 0 et 100%'
                    ])
                ],
                'label' => 'TVA (%)'
            ])
            ->add('montant_ttc', NumberType::class, [
                'constraints' => [
                    new GreaterThan([
                        'value' => 0,
                        'message' => 'Le montant TTC doit être supérieur à 0'
                    ])
                ],
                'label' => 'Montant TTC'
            ])
            ->add('montant_don', NumberType::class, [
                'label' => 'Montant don',
                'constraints' => [
                    new Callback([
                        'callback' => function ($value, ExecutionContextInterface $context) {
                            $form = $context->getRoot();
                            $montantTtc = $form->get('montant_ttc')->getData();

                            if ($value === null || $montantTtc === null) {
                                return;
                            }

                            if ($value > $montantTtc) {
                                $context->buildViolation('Le montant du don ne peut pas être supérieur au montant TTC')
                                    ->addViolation();
                            }

                            if ($value < 0) {
                                $context->buildViolation('Le montant du don ne peut pas être négatif')
                                    ->addViolation();
                            }
                        }
                    ])
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Facture::class,
        ]);
    }
}