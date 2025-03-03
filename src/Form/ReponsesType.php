<?php
namespace App\Form;

use App\Entity\Reclamation;
use App\Entity\Reponses;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class ReponsesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
           
            ->add('contenuRep', TextType::class, [
                'label' => 'Contenu de la réponse',
                'required' => false, 
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le contenu est requis.']),
                    new Assert\Length([
                        'min' => 10,
                        'minMessage' => 'Le contenu doit contenir au moins {{ limit }} caractères.',
                    ])
                ],
            ]);
            
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reponses::class,
            'attr' => ['novalidate' => 'novalidate'], // Désactive la validation HTML5 au niveau du formulaire
        ]);
    }
}
