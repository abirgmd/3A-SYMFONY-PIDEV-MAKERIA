<?php

namespace App\Form;

use App\Entity\Commentaire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class Commentaire1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomcomment', TextType::class, [
                'label' => 'Name',
                'attr' => ['readonly' => true], // Empêcher l'utilisateur de modifier le nom
            ])
            ->add('timecomment',DateTimeType::class, [
                'widget' => 'single_text',
                'data' => $options['data']->getTimecomment() ?? new \DateTime(),
            ])
           
            ->add('text_commentaire', TextareaType::class, [
                'label' => 'Your Comment',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commentaire::class,
        ]);
    }
}
