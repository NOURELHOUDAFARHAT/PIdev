<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use TCPDF;
use App\Entity\Visite;

class PdfController extends AbstractController
{
    /**
     * @Route("/generate-pdf", name="generate_pdf")
     */
    public function generatePdf(): Response
{
    // Instancier TCPDF
    $pdf = new TCPDF();
    
    // Définir les paramètres de style
    $pdf->SetTextColor(0, 80, 140); // Couleur du texte (RGB)
    $pdf->SetFont('helvetica', 'B', 16); // Police, style (gras), taille de la police
    
    // Ajouter une page
    $pdf->AddPage();

    // Récupérer les détails de la visite
    $entityManager = $this->getDoctrine()->getManager();
    $visitRepository = $entityManager->getRepository(Visite::class);
    $visitDetails = $visitRepository->findAll(); // ou trouvez la visite que vous souhaitez afficher

    // Inclure les détails de la visite
    $pdf->Write(0, 'Détails de la visite :');
    $pdf->Ln();
    foreach ($visitDetails as $visit) {
        $pdf->SetFont('helvetica', '', 12); // Réinitialiser la police et la taille de la police
        $pdf->Write(0, 'Numéro: ', '', false, 'L', true, 0, false, false, 0);
        $pdf->SetFont('helvetica', 'I', 12); // Italic
        $pdf->Write(0, $visit->getNumero(), '', false, 'L', true, 0, false, false, 0);
        $pdf->Ln();
        $pdf->SetFont('helvetica', '', 12); // Réinitialiser la police et la taille de la police
        $pdf->Write(0, 'Nom: ', '', false, 'L', true, 0, false, false, 0);
        $pdf->SetFont('helvetica', 'I', 12); // Italic
        $pdf->Write(0, $visit->getName(), '', false, 'L', true, 0, false, false, 0);
        $pdf->Ln();
        $pdf->SetFont('helvetica', '', 12); // Réinitialiser la police et la taille de la police
        $pdf->Write(0, 'Date de visite: ', '', false, 'L', true, 0, false, false, 0);
        $pdf->SetFont('helvetica', '', 12); // Regular
        $pdf->Write(0, $visit->getDateVisite()->format('Y-m-d'), '', false, 'L', true, 0, false, false, 0);
        $pdf->Ln();
        // Ajoutez d'autres détails de visite selon vos besoins
    }
    
    // Rendre le PDF
    $pdfContent = $pdf->Output('output.pdf', 'S');
    
    // Envoyer le PDF en tant que réponse
    return new Response($pdfContent, 200, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'attachment; filename="output.pdf"',
    ]);
}

    

}
