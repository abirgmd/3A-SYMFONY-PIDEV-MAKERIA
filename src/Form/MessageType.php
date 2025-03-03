<?php

namespace App\Form;

use App\Entity\Message;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;  // Importation de FileType
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\File;  // Importation de File pour la validation des fichiers

class MessageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('titremsg', TextType::class, [
            'required' => false,  // Désactive la validation HTML5 'required'
            'attr' => ['novalidate' => 'novalidate'], // Désactive la validation HTML5
        ])
            ->add('descriptionmsg', TextType::class, [
                'required' => false, // Désactive le contrôle HTML5 'required'
                'attr' => ['novalidate' => 'novalidate'], // Désactive la validation HTML5
            ])
            ->add('contenu', TextType::class, [
                'required' => false, // Désactive le contrôle HTML5 'required'
                'attr' => ['novalidate' => 'novalidate'], // Désactive la validation HTML5
            ])
            ->add('image', FileType::class, [
                'label' => 'Image (fichier PNG ou JPG)',
                'mapped' => false, // Important, car ce champ ne correspond pas directement à l'entité
                'required' => false, // Non requis dans HTML5
                'attr' => ['novalidate' => 'novalidate'], // Désactive la validation HTML5
                'constraints' => [
                    new File([
                        'maxSize' => '2M',
                        'mimeTypes' => ['image/jpeg', 'image/png'],
                        'mimeTypesMessage' => 'Veuillez uploader une image valide (JPEG ou PNG)',
                    ])
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Message::class,
        ]);
    }
}