<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GestionPatrimoineController extends AbstractController
{
    #[Route('/gestion/patrimoine', name: 'app_gestion_patrimoine')]
    public function index(): Response
    {
        return $this->render('gestion_patrimoine/index.html.twig', [
            'controller_name' => 'GestionPatrimoineController',
        ]);
    }
}
