<?php

namespace App\Controller;

use App\Entity\VparAvis;
use App\Repository\VparAvisRepository;
use App\Repository\VparServiceRepository;
use App\Repository\VparVehicleRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home.index', methods: ['GET'])]
    public function index(VparServiceRepository $VparService, VparVehicleRepository $VparVehicle, VparAvisRepository $VparAvis, Request $request, PaginatorInterface $paginator): Response
    {

        $vehicles = $paginator->paginate(
            $VparVehicle->findBy([], ['updatedAt' => 'DESC']),
            $request->query->getInt('page', 1),
            3
        );

        $services = $VparService->findAll();

        $avis = $VparAvis->findBy(['approve' => true], ['Date' => 'DESC'], 3);


        return $this->render('pages/home.html.twig', [
            'title_page' => 'Accueil | V.Parrot',
            'nav_item1' => 'Services',
            'nav_item2' => 'Ventes véhicules',
            'nav_item3' => 'Avis',
            'nav_item4' => 'Contactez-nous',
            'h1_serv' => 'Services',
            'h1_vent' => 'Ventes véhicules',
            'count_vehicles' => 'véhicules vous attendent actuellement !',
            'services' => $services,
            'cars' => $vehicles,
            'avis' => $avis,
        ]);
    }
}
