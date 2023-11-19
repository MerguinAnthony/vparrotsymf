<?php

namespace App\Controller;

use App\Form\ServiceType;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\VparServiceRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ServicesController extends AbstractController
{

    /**
     * BackOffice Services Management
     *
     * @param VparServiceRepository $services
     * @return Response
     */
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
            'nav_item5' => 'Gestion RH',
            'nav_item6' => 'Gestion des avis clients',
            'nav_item7' => 'Messagerie',
            'nav_item8' => 'Déconnexion',
            'h1_index' => 'Gestion des services',
            'add_btn' => 'Ajouter un nouveau service',
            'th_name' => 'Nom du service',
            'th_text' => 'Description du service',
            'th_img' => 'Image du service',
            'td_modify' => 'Modifier',
            'td_delete' => 'Supprimer',
            'services' => $services->findAll(),
        ]);
    }


    /**
     * BackOffice Services Management
     *
     * @param Request $request
     * @param EntityManagerInterface $em
     * @return Response
     */
    #[IsGranted('ROLE_ADMIN')]
    #[Route('/back/gestion-des-services/edition/{id}', name: 'app_services_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, VparServiceRepository $service, EntityManagerInterface $em, int $id): Response
    {

        $service = $service->find($id);

        $form = $this->createForm(ServiceType::class, $service);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($service);
            $em->flush();

            $this->addFlash('success', 'Le service a bien été modifié !');

            return $this->redirectToRoute('app_services');
        }
        return $this->render('pages/services/gServicesEdit.html.twig', [
            'title_page' => 'modification des services | V.Parrot',
            'nav_item1' => 'Retour vers le site',
            'nav_item2' => 'Gestion des ventes',
            'nav_item3' => 'Gestion des services',
            'nav_item4' => 'Gestion des horaires',
            'nav_item5' => 'Gestion RH',
            'nav_item6' => 'Gestion des avis clients',
            'nav_item7' => 'Messagerie',
            'nav_item8' => 'Déconnexion',
            'h1_edit' => 'Gestion des services',
            'h2_edit' => 'Modification d\'un service',
            'form' => $form->createView(),
        ]);
    }
}
