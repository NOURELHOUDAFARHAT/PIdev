<?php

// src/Controller/FeedbackController.php

namespace App\Controller;
use App\Entity\Bien;
use App\Entity\Feedback;
use App\Form\FeedbackType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class FeedbackController extends AbstractController
{
    public function addFeedback(Request $request, Bien $bien): Response
    {
        $feedback = new Feedback();
        $form = $this->createForm(FeedbackType::class, $feedback);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $feedback->setBien($bien);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($feedback);
            $entityManager->flush();

            return $this->redirectToRoute('app_bien_front', ['refB' => $bien->getrefB()]);
        }

        return $this->render('feedback/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
