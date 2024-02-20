<?php

namespace App\Form;

use App\Entity\Visite;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Validator\Constraints\GreaterThan;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Type;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class VisiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('numero', null, [
            'required' => false,
            'constraints' => [
                new Callback(function ($value, ExecutionContextInterface $context) {
                    if (strlen($value) > 8) {
                        $context->buildViolation('Le numéro ne peut pas dépasser 8 caractères.')
                            ->addViolation();
                    }
                }),
            ],
            'attr' => [
                'class' => 'dynamic-color',
            ],
        ])
            ->add('dateVisite', DateType::class, [
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'data' => new \DateTime(),
                'constraints' => [
                    new GreaterThan("today")
                ]
            ])
            ->add('email', null, [
                'required' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez saisir un email'
                    ]),
                    new Assert\Email(),
                ],
            ])
            ->add('name', null, [
                'required' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez saisir un nom.'
                    ]),
                    new Length(['min' => 3]),
                    new Regex([
                        'pattern' => '/^[a-zA-Z]+$/',
                        'message' => 'Le nom doit contenir uniquement des lettres.']),
                ],
            ])
            ->add('refB', null, [
                'required' => false,
                'constraints' => [
                    new Assert\NotBlank(),
                ],
            ])
            ;
        }
      }
    
