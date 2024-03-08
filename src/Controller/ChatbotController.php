<?php

// src/Controller/ChatbotController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Google\Cloud\Dialogflow\V2\SessionsClient;
use Google\Cloud\Dialogflow\V2\SessionName;

class ChatbotController extends AbstractController
{
    public function index(Request $request): Response
    {
        
        $jsonCredentials = 'config/nour-sh9g-c9c1f1ba45a3.json';
       
        $projectId = 'nour-sh9g';
   
        $sessionId = 'unique-session-id';

       
        $sessionClient = new SessionsClient(['credentials' => $jsonCredentials]);

        // Créer un nom de session pour Dialogflow
        $session = $sessionClient->sessionName($projectId, $sessionId);

        // Récupérer le message de la requête HTTP
        $message = $request->request->get('message');

        // Définir le texte de l'entité de la requête de l'utilisateur
        $textInput = new \Google\Cloud\Dialogflow\V2\TextInput();
        $textInput->setText($message);
        $textInput->setLanguageCode('fr-FR');

        // Créer une requête de détection d'intention
        $queryInput = new \Google\Cloud\Dialogflow\V2\QueryInput();
        $queryInput->setText($textInput);

        // Envoyer la requête à Dialogflow
        $response = $sessionClient->detectIntent($session, $queryInput);
        
        // Récupérer le résultat de la requête
        $queryResult = $response->getQueryResult();
        $fulfillmentText = $queryResult->getFulfillmentText();

        // Retourner la réponse de Dialogflow
        return new Response($fulfillmentText);
    }
}
