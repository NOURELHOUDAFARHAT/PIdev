<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;

class MyProfilController extends AbstractController
{
    #[Route('/user/{id}', name: 'app_user_profil', methods: ['GET'])]
    public function afficherMonProfil($id, UserRepository $userRepository): Response
    {
        $user = $userRepository->find($id);

        // Render the template with the user data
        return $this->render('acceuil.html.twig', [
            'users' => [$user], // Assuming you are passing a single user
        ]);
    }
}
