<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ParcourCertifController extends AbstractController
{
    #[Route('/parcourCertif', name: 'app_parcour_certif')]
    public function index(): Response
    {
        return $this->render('parcour_certif/index.html.twig', [
            'controller_name' => 'ParcourCertifController',
        ]);
    }
}
