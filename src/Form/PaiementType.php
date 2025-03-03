<?php

namespace App\Form;

use App\Entity\Paiement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

use Symfony\Component\Form\Extension\Core\Type\DateType;

class PaiementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('PaymentMethod', ChoiceType::class, [
                'choices' => [
                    'Credit Card' => 'Credit Card',
                    'Debit Card' => 'Debit Card',
                    'Paypal' => 'Paypal',
                ],
                'expanded' => true,
                'multiple' => false,
            ])
            ->add('cardDetails', TextType::class)
            ->add('CardNumber', TextType::class)
            ->add('expiryDate', DateType::class, [
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
                'format' => 'yyyy-MM-dd',
            ])
            ->add('CVV', TextType::class);
    }



    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Paiement::class,
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'csrf_token_id' => 'paiement_form',
        ]);
    }
}