<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AtelierProController extends AbstractController
{
    #[Route('/atelierPro', name: 'app_atelier_pro')]
    public function index(): Response
    {
        return $this->render('atelier_pro/index.html.twig', [
            'controller_name' => 'AtelierProController',
        ]);
    }
}
