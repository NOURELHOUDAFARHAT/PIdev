<?php

namespace App\Form;

use App\Entity\ReservationDesBiens;
use Symfony\Component\Form\Extension\Core\Type\DateType; 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class ReservationDesBiensType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            /*->add('Prix')
            /*->add('adresse')*/
            ->add('dateDebut', DateType::class, [
                    'widget' => 'single_text',
        
            ])
        
            ->add('dateFin', DateType::class, [
                    'widget' => 'single_text',
        
            ])
            ->add('nombreDeMembre', IntegerType::class, [
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Type(['type' => 'integer']),
                    new Assert\GreaterThan(['value' => 0, 'message' => 'Le nombre de membres doit être supérieur à zéro.']),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ReservationDesBiens::class,
        ]);
    }
    
}
