<?php
namespace App\Form;

use App\Entity\Evaluation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class EvaluationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('userName', TextType::class, [
            'label' => 'Nom d\'utilisateur',
            'required' => true,
        ])
        
        ->add('userMail', EmailType::class, [
            'label' => 'Adresse e-mail',
            'required' => true,
        ])
            ->add('reviewText', TextareaType::class, [
                'label' => 'Votre évaluation',
                'required' => true,
            ])
            
            ->add('note', IntegerType::class, [
                'label' => 'Note',
                'attr' => [
                    'min' => 1,
                    'max' => 5,
                ],
            ])
            
            ->add('datePublication', DateType::class, [
                'label' => 'Date de publication',
                'widget' => 'single_text',
                'data' => $options['data']->getDatePublication() ?? new \DateTime(),
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evaluation::class,
        ]);
    }
}
