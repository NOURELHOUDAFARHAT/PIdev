<?php

namespace App\Controller;

use App\Entity\ReservationDesVoitures;
use App\Form\ReservationDesVoituresType;
use App\Repository\ReservationDesVoituresRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/r/servation/des/voitures')]
class ReservationDesVoituresController extends AbstractController
{
    #[Route('/', name: 'app_r_servation_des_voitures_index', methods: ['GET'])]
    public function index(ReservationDesVoituresRepository $ReservationDesVoituresRepository): Response
    {
        return $this->render('réservation_des_voitures/index.html.twig', [
            'r_servation_des_voitures' => $ReservationDesVoituresRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_r_servation_des_voitures_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $réservationDesVoiture = new ReservationDesVoitures();
        $form = $this->createForm(ReservationDesVoituresType::class, $réservationDesVoiture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($réservationDesVoiture);
            $entityManager->flush();
            return $this->redirectToRoute('app_success_page', ['successMessage' => 'Voiture added successfully!']);
    
        }

        return $this->renderForm('réservation_des_voitures/new.html.twig', [
            'r_servation_des_voiture' => $réservationDesVoiture,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_r_servation_des_voitures_show', methods: ['GET'])]
    public function show(ReservationDesVoitures $réservationDesVoiture): Response
    {
        return $this->render('réservation_des_voitures/show.html.twig', [
            'r_servation_des_voiture' => $réservationDesVoiture,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_r_servation_des_voitures_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ReservationDesVoitures $réservationDesVoiture, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReservationDesVoituresType::class, $réservationDesVoiture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_success_page', ['successMessage' => 'Voiture added successfully!']);
        }

        return $this->renderForm('réservation_des_voitures/edit.html.twig', [
            'r_servation_des_voiture' => $réservationDesVoiture,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_r_servation_des_voitures_delete', methods: ['POST'])]
    public function delete(Request $request, ReservationDesVoitures $réservationDesVoiture, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$réservationDesVoiture->getId(), $request->request->get('_token'))) {
            $entityManager->remove($réservationDesVoiture);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_success_page', ['successMessage' => 'Voiture added successfully!']);
    }
    
}
