<?php

namespace App\Form;

use App\Entity\ReservationDesVoitures;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType; 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\DateType;
class ReservationDesVoituresType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('dateDebut', DateType::class, [
            'widget' => 'single_text',

        ])

        ->add('dateFin', DateType::class, [
            'widget' => 'single_text',

        ])
        
        /*->add('prix', NumberType::class, [
            'scale' => 2, // Définissez le nombre de décimales souhaité
            'attr' => ['readonly' => true], // Rendez-le en lecture seule
        ])*/
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ReservationDesVoitures::class,
        ]);
    }
}
