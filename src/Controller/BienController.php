<?php

namespace App\Controller;
use App\Entity\Bien;
use App\Form\BienType;
use App\Repository\BienRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/bien')]

class BienController extends AbstractController
{
    #[Route('/', name: 'app_bien_index', methods: ['GET'])]
    public function index(Request $request, BienRepository $bienRepository,PaginatorInterface $paginator): Response
    {
        $biens = $bienRepository->findAll();
    
        $biens = $paginator->paginate(
            $biens, 
            $request->query->getInt('page', 1),
            3
        );
    
        return $this->render('bien/index.html.twig', [
            'biens' => $biens,
        ]);
    }

    #[Route('/new', name: 'app_bien_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
       
        $bien = new Bien();
        $form = $this->createForm(BienType::class, $bien);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {

            $image = $form->get('image')->getData();

            if ($image) {
                $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename.'.'.$image->guessExtension();
    
                try {
                   
                    $image->move(
                        $this->getParameter('image_directory'), 
                        $newFilename
                    );
                } catch (FileException $e) {
                 
                }
    
              
                $bien->setImage($newFilename);
            }
    
            $entityManager->persist($bien);
            $entityManager->flush(); 

            return $this->redirectToRoute('app_bien_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('bien/new.html.twig', [
            'bien' => $bien,
            'form' => $form,
        ]);
    }

    #[Route('/{refB}', name: 'app_bien_show', methods: ['GET'])]
    public function show(Bien $bien): Response
    {
        return $this->render('bien/show.html.twig', [
            'bien' => $bien,
        ]);
    }

    #[Route('/{refB}/edit', name: 'app_bien_edit', methods: ['GET', 'POST'])]
public function edit(Request $request, Bien $bien, EntityManagerInterface $entityManager): Response
{
    $form = $this->createForm(BienType::class, $bien);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $image = $form->get('image')->getData();

        if ($image) {
            $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $newFilename = $originalFilename.'.'.$image->guessExtension();

            try {
                $image->move(
                    $this->getParameter('image_directory'), 
                    $newFilename
                );
            } catch (FileException $e) {
              
            }

            $bien->setImage($newFilename);
        }

        $entityManager->flush();

        return $this->redirectToRoute('app_bien_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->renderForm('bien/edit.html.twig', [
        'bien' => $bien,
        'form' => $form,
    ]);
}

    #[Route('/{refB}', name: 'app_bien_delete', methods: ['POST'])]
    public function delete(Request $request, Bien $bien, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$bien->getRefB(), $request->request->get('_token'))) {
            $entityManager->remove($bien);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_bien_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/front', name: 'app_bien_front')]
    public function front(): Response
    {

        $bien = $this->getDoctrine()->getRepository(Bien::class)->findAll();

        return $this->render('bien/front.html.twig', [
            'biens' => $bien, 
        ]);
        
    }

    
    
}

