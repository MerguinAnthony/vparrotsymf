<?php

namespace App\Controller;

use App\Repository\VparServiceRepository;
use App\Repository\VparVehicleRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home.index', methods: ['GET'])]
    public function index(VparServiceRepository $VparService, VparVehicleRepository $VparVehicle): Response
    {
        $services = $VparService->findAll();
        $vehicles = $VparVehicle->findAll();

        return $this->render('pages/home.html.twig', [
            'title_page' => 'Accueil | V.Parrot',
            'nav_item1' => 'Services',
            'nav_item2' => 'Ventes véhicules',
            'nav_item3' => 'Avis',
            'nav_item4' => 'Contactez-nous',
            'h1_serv' => 'Services',
            'h1_vent' => 'Ventes véhicules',
            'services' => $services,
            'cars' => $vehicles,
        ]);
    }
}
