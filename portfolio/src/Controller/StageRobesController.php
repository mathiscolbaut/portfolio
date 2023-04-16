<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class StageRobesController extends AbstractController
{
    #[Route('/situationPro/stage', name: 'app_stage_robes')]
    public function index(): Response
    {
        return $this->render('stage_robes/stage.html.twig', [
            'controller_name' => 'StageRobesController',
        ]);
    }

}
