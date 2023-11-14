<?php

namespace App\Controller;

use App\Form\HourType;
use App\Repository\VparHourRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class HorairesController extends AbstractController
{

    /**
     * BackOffice Schedules Management
     *
     * @param VparHourRepository $VparHour
     * @return Response
     */
    #[IsGranted('ROLE_ADMIN')]
    #[Route('/back/gestion-des-horaires', name: 'app_horaires')]
    public function index(VparHourRepository $VparHour): Response
    {
        $hour = $VparHour->findAll();

        return $this->render('pages/horaires/gHoraires.html.twig', [
            'title_page' => 'Gestion des horaires | V.Parrot',
            'nav_item1' => 'Retour vers le site',
            'nav_item2' => 'Gestion des ventes',
            'nav_item3' => 'Gestion des services',
            'nav_item4' => 'Gestion des horaires',
            'nav_item5' => 'Gestion des employés',
            'nav_item6' => 'Gestion des avis clients',
            'nav_item7' => 'Messagerie',
            'nav_item8' => 'Déconnexion',
            'h1_index' => 'Gestion des horaires',
            'h2_index' => 'Horaires actuels',
            'th_1' => 'Lundi',
            'th_2' => 'Mardi',
            'th_3' => 'Mercredi',
            'th_4' => 'Jeudi',
            'th_5' => 'Vendredi',
            'th_6' => 'Samedi',
            'th_7' => 'Dimanche',
            'td_modify' => 'Modifier',
            'hour' => $hour,
        ]);
    }

    /**
     * BackOffice Schedules Management
     *
     * @param Request $request
     * @param EntityManagerInterface $em
     * @return Response
     */
    #[IsGranted('ROLE_ADMIN')]
    #[Route('/back/gestion-des-horaires/edition/{id}', name: 'app_gestion_horaires_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, VparHourRepository $VparHour, EntityManagerInterface $em, int $id): Response
    {
        $hours = $VparHour->find($id);
        $form = $this->createForm(HourType::class, $hours);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $hours = $form->getData();
            $em->persist($hours);
            $em->flush();

            $this->addFlash('success', 'Les horaires ont bien été modifiés !');

            return $this->redirectToRoute('app_horaires');
        }

        return $this->render('pages/horaires/gHorairesEdit.html.twig', [
            'title_page' => 'Modification des horaires | V.Parrot',
            'nav_item1' => 'Retour vers le site',
            'nav_item2' => 'Gestion des ventes',
            'nav_item3' => 'Gestion des services',
            'nav_item4' => 'Gestion des horaires',
            'nav_item5' => 'Gestion des employés',
            'nav_item6' => 'Gestion des avis clients',
            'nav_item7' => 'Messagerie',
            'nav_item8' => 'Déconnexion',
            'h1_edit' => 'Gestion des horaires',
            'h2_edit' => 'Modification des horaires',
            'form' => $form->createView(),
        ]);
    }
}
