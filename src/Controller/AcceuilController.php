<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Session\Session;

class AcceuilController extends AbstractController
{

    private $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

    #[Route('/acceuil', name: 'app_acceuil')]
    public function index(): Response
    {
        // Récupérer l'email de la session
        $sessionValue = $this->session->get('email');

        if ($sessionValue) {
            return $this->render('acceuil/index.html.twig', [
                'controller_name' => 'AcceuilController',
                'sessionMail' => $sessionValue,
            ]);
        } else {
            return $this->redirectToRoute('app_login');
        }
    }
}
