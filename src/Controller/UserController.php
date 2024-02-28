<?php

namespace App\Controller;

use App\Entity\User; // Importer l'entité User
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\UserType;

class UserController extends AbstractController
{
    #[Route('/users', name: 'app_users', methods: ['GET'])]
    public function getUsers(UserRepository $userRepository): Response
    {
        $users = $userRepository->findAll();

        return $this->render('user/afficherUsers.html.twig', [
            'users' => $users,
        ]);
    }

    #[Route('/users/delete/{id}', name: 'app_delete', methods: ['POST'])]
    public function deleteUser($id, UserRepository $userRepository, EntityManagerInterface $entityManager): Response
    {
        $user = $userRepository->find($id);
        
        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

        $entityManager->remove($user);
        $entityManager->flush();

        return $this->redirectToRoute('app_users'); // Redirige vers la page listant les utilisateurs
    }

    #[Route('/users/{id}/edit', name: 'app_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, int $id, EntityManagerInterface $entityManager): Response
    {
    $user = $entityManager->getRepository(User::class)->find($id);
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'User updated successfully.'); // Add flash message

            return $this->redirectToRoute('app_users'); // Redirect to user index page
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(), // Pass form view instead of form
        ]);
    }
  
}
