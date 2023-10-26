<?php

namespace App\Controller;

use App\Form\VehiclesType;
use App\Entity\VparVehicle;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\VparVehicleRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class VenteVehiculeController extends AbstractController
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
    #[Route('/back/gestion-des-ventes', name: 'app_vente_vehicule')]
    public function index(VparVehicleRepository $VparVehicle, PaginatorInterface $paginator, Request $request): Response
    {

        $vehicles = $paginator->paginate(
            $VparVehicle->findBy([], ['updatedAt' => 'DESC']),
            $request->query->getInt('page', 1),
            5
        );



        return $this->render('pages/vente/gVentes.html.twig', [
            'title_page' => 'Gestion des ventes | V.Parrot',
            'nav_item1' => 'Retour vers le site',
            'nav_item2' => 'Gestion des ventes',
            'nav_item3' => 'Gestion des services',
            'nav_item4' => 'Gestion des horaires',
            'nav_item5' => 'Gestion des employés',
            'nav_item6' => 'Gestion des avis clients',
            'nav_item7' => 'Déconnexion',
            'h1_index' => 'Gestion des véhicules',
            'h2_index' => 'Véhicules en stock',
            'add_btn' => 'Ajouter un véhicule',
            'count_vehicles' => 'Nombre de véhicules en stock :',
            'th_img' => 'Photo principale',
            'th_date' => 'Date d\'ajout',
            'th_denom' => 'Dénomination',
            'th_price' => 'Prix',
            'td_modify' => 'Modifier',
            'td_delete' => 'Supprimer',
            'vehicles' => $vehicles,
        ]);
    }

    /**
     * Undocumented function
     *
     * @param EntityManagerInterface $manager
     * @param Request $request
     * @return Response
     */
    #[IsGranted('ROLE_USER')]
    #[Route('/back/gestion-des-ventes/nouveau', name: 'app_vente_vehicule_new', methods: ['GET', 'POST'])]
    public function new(EntityManagerInterface $manager, Request $request): Response
    {
        $vehicles = new VparVehicle();
        $form = $this->createForm(VehiclesType::class, $vehicles);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $vehicles = $form->getData();
            $manager->persist($vehicles);
            $manager->flush();

            $this->addFlash('success', 'Le véhicule a bien été ajouté.');

            return $this->redirectToRoute('app_vente_vehicule');
        }


        return $this->render('pages/vente/gVentesNew.html.twig', [
            'title_page' => 'Ajout d\'un véhicule | V.Parrot',
            'nav_item1' => 'Retour vers le site',
            'nav_item2' => 'Gestion des ventes',
            'nav_item3' => 'Gestion des services',
            'nav_item4' => 'Gestion des horaires',
            'nav_item5' => 'Gestion des employés',
            'nav_item6' => 'Gestion des avis clients',
            'nav_item7' => 'Déconnexion',
            'h1_new' => 'Gestion des véhicules',
            'h2_new' => 'Ajouter un véhicule à la vente',
            'form' => $form->createView(),
        ]);
    }

    /**
     * Undocumented function
     *
     * @param VparVehicleRepository $VparVehicle
     * @param int $id
     * @param EntityManagerInterface $manager
     * @param Request $request
     * @return Response
     */
    #[IsGranted('ROLE_USER')]
    #[Route('/back/gestion-des-ventes/edition/{id}', name: 'app_vente_vehicule_edit', methods: ['GET', 'POST'])]
    public function edit(VparVehicleRepository $VparVehicle, int $id, EntityManagerInterface $manager, Request $request): Response
    {
        $vehicles = $VparVehicle->findOneBy(['id' => $id]);
        $form = $this->createForm(VehiclesType::class, $vehicles);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $vehicles = $form->getData();
            $manager->persist($vehicles);
            $manager->flush();

            $this->addFlash('success', 'Le véhicule a bien été modifié.');

            return $this->redirectToRoute('app_vente_vehicule');
        }

        return $this->render('pages/vente/gVentesEdit.html.twig', [
            'title_page' => 'Modification d\'un véhicule | V.Parrot',
            'nav_item1' => 'Retour vers le site',
            'nav_item2' => 'Gestion des ventes',
            'nav_item3' => 'Gestion des services',
            'nav_item4' => 'Gestion des horaires',
            'nav_item5' => 'Gestion des employés',
            'nav_item6' => 'Gestion des avis clients',
            'nav_item7' => 'Déconnexion',
            'h1_edit' => 'Gestion des véhicules',
            'h2_edit' => 'Modification d\'un véhicule à la vente',
            'form' => $form->createView(),
        ]);
    }

    /**
     * Undocumented function
     * 
     * @param VparVehicleRepository $VparVehicle
     * @param int $id
     * @param EntityManagerInterface $manager
     * @return Response
     */
    #[IsGranted('ROLE_USER')]
    #[Route('/back/gestion-des-ventes/suppression/{id}', name: 'app_vente_vehicule_delete', methods: ['GET'])]
    public function delete(VparVehicleRepository $VparVehicle, int $id, EntityManagerInterface $manager): Response
    {

        $vehicles = $VparVehicle->findOneBy(['id' => $id]);
        $manager->remove($vehicles);
        $manager->flush();

        $this->addFlash('success', 'Le véhicule a bien été supprimé.');

        return $this->redirectToRoute('app_vente_vehicule');
    }
}
