<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BackController extends AbstractController
{
    #[Route('/back', name: 'app_back')]
    public function index(): Response
    {
        return $this->render('pages/back.html.twig', [
            'header_title' => 'Interface d\'administration',
            'nav_item1' => 'Retour au site',
            'nav_item2' => 'Gestion des employés',
            'nav_item3' => 'Gestion des services',
            'nav_item4' => 'Gestion des Horaires',
            'nav_item5' => 'Gestion des ventes',
            'nav_item6' => 'Gestion des avis',
        ]);
    }
}
