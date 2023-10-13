<?php

namespace App\Controller;

use App\Form\ServicesType;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\VparServiceRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ServicesController extends AbstractController
{
    #[IsGranted('ROLE_ADMIN')]
    #[Route('/back/gestion-des-services', name: 'app_services')]
    public function index(VparServiceRepository $services): Response
    {
        return $this->render('pages/services/gServices.html.twig', [
            'title_page' => 'Gestion des services | V.Parrot',
            'nav_item1' => 'Retour vers le site',
            'nav_item2' => 'Gestion des ventes',
            'nav_item3' => 'Gestion des services',
            'nav_item4' => 'Gestion des horaires',
            'nav_item5' => 'Gestion des employés',
            'nav_item6' => 'Gestion des avis clients',
            'nav_item7' => 'Déconnexion',
            'h1_index' => 'Gestion des Services',
            'h2_index' => 'Service actuellement proposés',
            'add_btn' => 'Ajouter un nouveau service',
            'th_name' => 'Nom du service',
            'th_text' => 'Description du service',
            'th_img' => 'Image du service',
            'td_modify' => 'Modifier',
            'td_delete' => 'Supprimer',
            'services' => $services->findAll(),
        ]);
    }
}
