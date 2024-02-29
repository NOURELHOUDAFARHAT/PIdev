<?php

namespace App\Controller;

use App\Repository\BienRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DiagrammeController extends AbstractController
{
    #[Route('/dgm', name: 'Biens_par_type')]
    public function biensParType(BienRepository $BienRepository): Response
    {
        $BiensParType = [
            'Appartement' => $BienRepository->getCountByType('Appartement'),
            'Villa' => $BienRepository->getCountByType('Villa'),
            'Studio' => $BienRepository->getCountByType('Studio'),
           
        ];
    
        return $this->render('diagramme/Biens_par_type.html.twig', [
            'BiensParType' => $BiensParType,
        ]);
    }
    

}