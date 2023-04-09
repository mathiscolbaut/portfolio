<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TableauSyntheseController extends AbstractController
{
    #[Route('/TableauSynthese', name: 'app_tableau_synthese')]
    public function index(): Response
    {
        return $this->render('tableau_synthese/tabSynthese.html.twig', [
            'controller_name' => 'TableauSyntheseController',
        ]);
    }
}
