<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VeilleController extends AbstractController
{
    #[Route('/veille', name: 'app_veille')]
    public function index(): Response
    {
        $rss = simplexml_load_file('https://www.google.fr/alerts/feeds/14623178845856607709/7148342474963529294');
      


        return $this->render('veille/index.html.twig', [
            'controller_name' => 'VeilleController',
             'rssItems' => $rss->channel->item
        ]);
    }
}
