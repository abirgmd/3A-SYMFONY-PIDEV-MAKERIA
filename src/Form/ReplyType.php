<?php

namespace App\Form;

use App\Entity\Reply;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class ReplyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('contenureply', TextareaType::class, [
                'label' => 'Votre réponse',
                'required' => false,  // Désactive la validation HTML5 'required'
                'attr' => ['novalidate' => 'novalidate'], // Désactive la validation HTML5
                'attr' => [
                    'rows' => 5,
                    'placeholder' => 'Écrivez votre réponse ici...',
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reply::class,
        ]);
    }
}

