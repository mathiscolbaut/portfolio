<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DocumentationsController extends AbstractController
{
    #[Route('/documentations', name: 'app_documentations')]
    public function index(): Response
    {
        return $this->render('documentations/index.html.twig', [
            'controller_name' => 'DocumentationsController',
        ]);
    }
}
