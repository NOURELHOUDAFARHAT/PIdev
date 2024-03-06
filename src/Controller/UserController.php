<?php

namespace App\Controller;

use App\Entity\User; 
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\UserType;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


use Symfony\Component\Mime\Email;
class UserController extends AbstractController
{
    private $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

    #[Route('/users', name: 'app_users', methods: ['GET'])]
    public function getUsers(UserRepository $userRepository): Response
    {
         // Récupérer l'email de la session
         $sessionValue = $this->session->get('email');

         if ($sessionValue) {
        $users = $userRepository->findAll();

        return $this->render('user/afficherUsers.html.twig', [
            'users' => $users,
            'sessionMail' => $sessionValue,
        ]);
    }
    else {
        return $this->redirectToRoute('app_login');
    }
    }

    #[Route('/users/delete/{id}', name: 'app_delete', methods: ['POST'])]
    public function deleteUser($id, UserRepository $userRepository, EntityManagerInterface $entityManager): Response
    {
         // Récupérer l'email de la session
         $sessionValue = $this->session->get('email');

         if ($sessionValue) {
        $user = $userRepository->find($id);
        
        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

        $entityManager->remove($user);
        $entityManager->flush();

        return $this->redirectToRoute('app_users',['sessionMail' => $sessionValue,]); // Redirige vers la page listant les utilisateurs
    }
    else {
        return $this->redirectToRoute('app_login');
    }
}

    #[Route('/users/{id}/edit', name: 'app_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, int $id, EntityManagerInterface $entityManager): Response
    {
         // Récupérer l'email de la session
         $sessionValue = $this->session->get('email');

         if ($sessionValue) {
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
            'form' => $form->createView(),
            'sessionMail' => $sessionValue,
             // Pass form view instead of form
        ]);
    }
    else{
        return $this->redirectToRoute('app_login');
    }
    }
   
    
}
