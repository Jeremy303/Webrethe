<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccuileController extends AbstractController
{
    #[Route('/accuile', name: 'app_accuile')]
    public function index(): Response
    {
        return $this->render('accuile/index.html.twig', [
            'controller_name' => 'AccuileController',
        ]);
    }
}
