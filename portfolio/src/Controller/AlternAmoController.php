<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AlternAmoController extends AbstractController
{
    #[Route('/situationPro/amo', name: 'app_alternance_amo')]
    public function index(): Response
    {
        return $this->render('altern_amo/alternanceAmo.html.twig', [
            'controller_name' => 'AlternAmoController',
        ]);
    }
}
