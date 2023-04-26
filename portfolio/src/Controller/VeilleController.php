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
        $rss = simplexml_load_file('https://www.google.com/alerts/feeds/14623178845856607709/14361946119755138195');
        $rss2 = simplexml_load_file('https://www.google.com/alerts/feeds/14623178845856607709/3732636363033765166');
        // Définir le namespace Atom
        $atom = $rss->children('http://www.w3.org/2005/Atom');
        $atom2 = $rss2->children('http://www.w3.org/2005/Atom');
        
        return $this->render('veille/index.html.twig', [
            'controller_name' => 'VeilleController',
            'rssItems' => $atom->entry,
            'rssItems2' => $atom2->entry,
        ]);
    }
}
