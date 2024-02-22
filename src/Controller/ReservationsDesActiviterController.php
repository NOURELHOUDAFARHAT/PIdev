<?php

namespace App\Controller;

use App\Entity\ReservationsDesActiviter;
use App\Form\ReservationsDesActiviterType;
use App\Repository\ReservationsDesActiviterRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/r/servations/des/activiter')]
class ReservationsDesActiviterController extends AbstractController
{
    #[Route('/', name: 'app_r_servations_des_activiter_index', methods: ['GET'])]
    public function index(ReservationsDesActiviterRepository $ReservationsDesActiviterRepository): Response
    {
        return $this->render('réservations_des_activiter/index.html.twig', [
            'r_servations_des_activiters' => $ReservationsDesActiviterRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_r_servations_des_activiter_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $ReservationsDesActiviter = new ReservationsDesActiviter();
        $form = $this->createForm(ReservationsDesActiviterType::class, $ReservationsDesActiviter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($ReservationsDesActiviter);
            $entityManager->flush();

            return $this->redirectToRoute('app_r_servations_des_activiter_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('réservations_des_activiter/new.html.twig', [
            'r_servations_des_activiter' => $ReservationsDesActiviter,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_r_servations_des_activiter_show', methods: ['GET'])]
    public function show(ReservationsDesActiviter $ReservationsDesActiviter): Response
    {
        return $this->render('réservations_des_activiter/show.html.twig', [
            'r_servations_des_activiter' => $ReservationsDesActiviter,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_r_servations_des_activiter_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ReservationsDesActiviter $ReservationsDesActiviter, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReservationsDesActiviterType::class, $ReservationsDesActiviter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_r_servations_des_activiter_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('réservations_des_activiter/edit.html.twig', [
            'r_servations_des_activiter' => $ReservationsDesActiviter,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_r_servations_des_activiter_delete', methods: ['POST'])]
    public function delete(Request $request, ReservationsDesActiviter $ReservationsDesActiviter, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ReservationsDesActiviter->getId(), $request->request->get('_token'))) {
            $entityManager->remove($ReservationsDesActiviter);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_r_servations_des_activiter_index', [], Response::HTTP_SEE_OTHER);
    }
}
