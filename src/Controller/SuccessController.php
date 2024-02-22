<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SuccessController extends AbstractController
{
    #[Route('/success', name: 'app_success_page')]
    public function successPage(Request $request): Response
    {
        $successMessage = $request->query->get('successMessage');

        return $this->render('success_page.html.twig', [
            'successMessage' => $successMessage,
        ]);
    }
}
