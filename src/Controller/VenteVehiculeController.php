<?php

namespace App\Controller;

use App\Form\VehiclesType;
use App\Entity\VparVehicle;
use App\Repository\VparVehicleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VenteVehiculeController extends AbstractController
{

    /**
     * Base
     */
    #[Route('/back/gestion-des-ventes', name: 'app_vente_vehicule')]
    public function index(VparVehicleRepository $VparVehicle, PaginatorInterface $paginator, Request $request): Response
    {

        $vehicles = $paginator->paginate(
            $VparVehicle->findAll(),
            $request->query->getInt('page', 1),
            10
        );



        return $this->render('pages/gVentes.html.twig', [
            'title_page' => 'Gestion des ventes | V.Parrot',
            'nav_item1' => 'Retour vers le site',
            'nav_item2' => 'Gestion des employés',
            'nav_item3' => 'Gestion des services',
            'nav_item4' => 'Gestion des horaires',
            'nav_item5' => 'Gestion des ventes',
            'nav_item6' => 'Gestion des avis clients',
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
    #[Route('/back/gestion-des-ventes/nouveau', name: 'app_vente_vehicule_new', methods: ['GET', 'POST'])]
    public function new(EntityManagerInterface $manager, Request $request): Response
    {
        $vehicles = new VparVehicle();
        $vehicles->setAddDate(new \DateTimeImmutable('now'));

        $form = $this->createForm(VehiclesType::class, $vehicles);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $vehicles = $form->getData();
            $manager->persist($vehicles);
            $manager->flush();

            $this->addFlash('success', 'Le véhicule a bien été ajouté.');

            return $this->redirectToRoute('app_vente_vehicule');
        }

        return $this->render('pages/gVentesNew.html.twig', [
            'title_page' => 'Ajout d\'un véhicule | V.Parrot',
            'nav_item1' => 'Retour vers le site',
            'nav_item2' => 'Gestion des employés',
            'nav_item3' => 'Gestion des services',
            'nav_item4' => 'Gestion des horaires',
            'nav_item5' => 'Gestion des ventes',
            'nav_item6' => 'Gestion des avis clients',
            'form' => $form->createView(),
        ]);
    }

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

        return $this->render('pages/gVentesEdit.html.twig', [
            'title_page' => 'Modification d\'un véhicule | V.Parrot',
            'nav_item1' => 'Retour vers le site',
            'nav_item2' => 'Gestion des employés',
            'nav_item3' => 'Gestion des services',
            'nav_item4' => 'Gestion des horaires',
            'nav_item5' => 'Gestion des ventes',
            'nav_item6' => 'Gestion des avis clients',
            'form' => $form->createView(),
        ]);
    }

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
