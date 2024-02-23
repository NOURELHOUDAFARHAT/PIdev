<?php

namespace App\Controller;

use App\Entity\ReservationDesBiens;
use App\Form\ReservationDesBiensType;
use App\Repository\ReservationDesBiensRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/r/servation/des/biens')]
class ReservationDesBiensController extends AbstractController
{
    #[Route('/', name: 'app_r_servation_des_biens_index', methods: ['GET'])]
    public function index(ReservationDesBiensRepository $ReservationDesBiensRepository): Response
    {
        return $this->render('réservation_des_biens/index.html.twig', [
            'r_servation_des_biens' => $ReservationDesBiensRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_r_servation_des_biens_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $réservationDesBien = new ReservationDesBiens();
        $form = $this->createForm(ReservationDesBiensType::class, $réservationDesBien);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($réservationDesBien);
            $entityManager->flush();

            return $this->redirectToRoute('app_success_page', ['successMessage' => 'Biens added successfully!']);
        }

        return $this->renderForm('réservation_des_biens/new.html.twig', [
            'r_servation_des_bien' => $réservationDesBien,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_r_servation_des_biens_show', methods: ['GET'])]
    public function show(ReservationDesBiens $réservationDesBien): Response
    {
        return $this->render('réservation_des_biens/show.html.twig', [
            'r_servation_des_bien' => $réservationDesBien,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_r_servation_des_biens_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ReservationDesBiens $réservationDesBien, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReservationDesBiensType::class, $réservationDesBien);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_success_page', ['successMessage' => 'Biens added successfully!']);
        }

        return $this->renderForm('réservation_des_biens/edit.html.twig', [
            'r_servation_des_bien' => $réservationDesBien,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_r_servation_des_biens_delete', methods: ['POST'])]
    public function delete(Request $request, ReservationDesBiens $réservationDesBien, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$réservationDesBien->getId(), $request->request->get('_token'))) {
            $entityManager->remove($réservationDesBien);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_success_page', ['successMessage' => 'Biens added successfully!']);
    }
}
