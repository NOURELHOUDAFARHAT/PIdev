<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User; // Importer l'entité User
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\UserType;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Session\Session;

class MonProfilController extends AbstractController

{
    private $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }



    
    #[Route('/mon/profil', name: 'app_mon_profil')]
    public function index(): Response

    {
         $sessionValue = $this->session->get('email');
        if ($sessionValue) {
        return $this->render('mon_profil/index.html.twig', [
            'controller_name' => 'MonProfilController',
            'sessionMail' => $sessionValue,
        ]);
    }
    else{
        return $this->redirectToRoute('app_login');
    }
    }




    #[Route('/mon_profil/{id}/edit', name: 'app_mon_profil_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, int $id, EntityManagerInterface $entityManager): Response
    {
        $sessionValue = $this->session->get('email');
        if ($sessionValue) {

    $user = $entityManager->getRepository(User::class)->find($id);
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->flush();

            $this->addFlash('success', 'User updated successfully.'); // Add flash message

            return $this->redirectToRoute('app_mon_profil_edit'); // Redirect to user index page
        }

        return $this->render('mon_profil/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(), // Pass form view instead of form
            'sessionMail' => $sessionValue,
        ]);
    }
        else{
            return $this->redirectToRoute('app_login');
        }
    }
   
}
