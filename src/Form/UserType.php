<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints as Assert;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'L\'adresse email ne peut pas être vide']),
                    new Assert\Email(['message' => 'L\'adresse email n\'est pas valide']),
                ],
                'attr' => [
                    'placeholder' => 'Ecrire votre email',
                ],
            ])
            ->add('plainPassword', PasswordType::class, [
                'mapped' => false,
                'attr' => [
                    'autocomplete' => 'new-password',
                    'placeholder' => 'Ecrire votre mot de passe',
                ],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Veuillez entrer un mot de passe',
                    ]),
                    new Assert\Length([
                        'min' => 6,
                        'minMessage' => 'Votre mot de passe doit comporter au moins {{ limit }} caractères',
                        // Longueur maximale autorisée par Symfony pour des raisons de sécurité
                        'max' => 4096,
                    ]),
                    new Assert\Regex([
                        'pattern' => '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).+$/',
                        'message' => 'Votre mot de passe doit contenir au moins une lettre majuscule, une lettre minuscule, un caractère spécial et un chiffre',
                    ]),
                ],
            ])
            ->add('nom', TextType::class, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le nom ne peut pas être vide']),
                    new Assert\Length([
                        'min' => 3,
                        'max' => 10,
                        'minMessage' => 'Le nom doit comporter au moins {{ limit }} caractères',
                        'maxMessage' => 'Le nom ne peut pas comporter plus de {{ limit }} caractères',
                    ]),
                    new Assert\Regex([
                        'pattern' => '/^[a-zA-Z]+$/',
                        'message' => 'Le nom ne doit contenir que des lettres.'
                    ])
                ],
                'attr' => [
                    'placeholder' => 'Ecrire votre nom',
                ],
            ])
            ->add('prenom', TextType::class, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le prénom ne peut pas être vide']),
                    new Assert\Length([
                        'min' => 2,
                        'max' => 100,
                        'minMessage' => 'Le prénom doit comporter au moins {{ limit }} caractères',
                        'maxMessage' => 'Le prénom ne peut pas comporter plus de {{ limit }} caractères',
                    ]),
                    new Assert\Regex([
                        'pattern' => '/^[a-zA-Z]+$/',
                        'message' => 'Le prénom ne doit contenir que des lettres.'
                    ])
                ],
                'attr' => [
                    'placeholder' => 'Ecrire votre prénom',
                ],
            ])
            ->add('adresse', ChoiceType::class, [
                'choices' => [
                    'Ariana' => 'Ariana',
                    'Beja' => 'Beja',
                    'Ben Arous' => 'Ben Arous',
                    'Bizerte' => 'Bizerte',
                    'Gabes' => 'Gabes',
                    'Gafsa' => 'Gafsa',
                    'Jendouba' => 'Jendouba',
                    'Kairouan' => 'Kairouan',
                    'Kasserine' => 'Kasserine',
                    'Kebili' => 'Kebili',
                    'La Manouba' => 'La Manouba',
                    'Le Kef' => 'Le Kef',
                    'Mahdia' => 'Mahdia',
                    'Médenine' => 'Médenine',
                    'Monastir' => 'Monastir',
                    'Nabeul' => 'Nabeul',
                    'Sfax' => 'Sfax',
                    'Sidi Bouzid' => 'Sidi Bouzid',
                    'Siliana' => 'Siliana',
                    'Sousse' => 'Sousse',
                    'Tataouine' => 'Tataouine',
                    'Tozeur' => 'Tozeur',
                    'Tunis' => 'Tunis',
                    'Zaghouan' => 'Zaghouan',
                ],
                'placeholder' => 'Sélectionnez une adresse',
                'required' => true,
            ])
            ->add('sexe', ChoiceType::class, [
                'choices' => [
                    'Homme' => 'male',
                    'Femme' => 'female',
                ],
                'placeholder' => 'Sélectionnez le sexe',
                'required' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
