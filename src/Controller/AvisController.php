<?php

namespace App\Controller;

use App\Repository\VparAvisRepository;
use App\Repository\VparVehicleRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class AvisController extends AbstractController
{
    /**
     * Undocumented function
     *
     * @param VparVehicleRepository $VparVehicle
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @return Response
     */
    #[IsGranted('ROLE_USER')]
    #[Route('/back/gestion-des-avis', name: 'app_avis')]
    public function index(VparAvisRepository $vparAvis, PaginatorInterface $paginator, Request $request): Response
    {

        $avis = $paginator->paginate(
            $vparAvis->findAll(),
            $request->query->getInt('page', 1),
            5
        );

        return $this->render('pages/avis/gAvis.html.twig', [
            'title_page' => 'Gestion des avis | V.Parrot',
            'nav_item1' => 'Retour vers le site',
            'nav_item2' => 'Gestion des ventes',
            'nav_item3' => 'Gestion des services',
            'nav_item4' => 'Gestion des horaires',
            'nav_item5' => 'Gestion des employés',
            'nav_item6' => 'Gestion des avis clients',
            'nav_item7' => 'Déconnexion',
            'h1_index' => 'Gestion des avis clients',
            'h2_index' => 'Avis clients',
            'add_btn' => 'Ajouter un avis',
            'count_vehicles' => 'Nombre d\'avis :',
            'td_date' => 'Date d\'ajout',
            'td_lastname' => 'Nom',
            'td_firstname' => 'Prénom',
            'td_rank' => 'Note',
            'td_message' => 'Message',
            'td_approve' => 'Approuver',
            'td_modify' => 'Modifier',
            'td_delete' => 'Supprimer',
            'avis' => $avis,
        ]);
    }
}
