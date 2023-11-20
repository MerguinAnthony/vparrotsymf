<?php

namespace App\Controller;

use App\Form\AvisType;
use App\Entity\VparAvis;
use App\Repository\VparAvisRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\VparVehicleRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AvisController extends AbstractController
{
    /**
     * BackOffice Avis Management
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
            $vparAvis->findBy([], ['Date' => 'DESC']),
            $request->query->getInt('page', 1),
            3
        );

        // Affichage Des avis trier avec la date la plus récente en haut



        return $this->render('pages/avis/gAvis.html.twig', [
            'title_page' => 'Gestion des avis | V.Parrot',
            'h1_index' => 'Gestion des avis clients',
            'add_btn' => 'Ajouter un avis',
            'count_vehicles' => 'Nombre d\'avis :',
            'td_date' => 'Date d\'ajout',
            'td_lastname' => 'Nom',
            'td_firstname' => 'Prénom',
            'td_rank' => 'Note',
            'td_message' => 'Message',
            'td_approve' => 'Approuver',
            'td_desappr' => 'Désapprouver',
            'td_modify' => 'Modifier',
            'td_delete' => 'Supprimer',
            'avis' => $avis,
        ]);
    }

    /**
     * BackOffice Avis Management
     *
     * @param VparAvisRepository $vparAvis
     * @param [type] $id
     * @return Response
     */
    #[IsGranted('ROLE_USER')]
    #[Route('/back/gestion-des-avis/approuver/{id}', name: 'app_avis_approve')]
    public function approve(VparAvisRepository $vparAvis, $id, EntityManagerInterface $manager): Response
    {
        $avis = $vparAvis->find($id);
        $avis->setApprove(true);
        $manager->persist($avis);
        $manager->flush();

        $this->addFlash('success', 'L\'avis a bien été approuvé');

        return $this->redirectToRoute('app_avis');
    }

    /**
     * BackOffice Avis Management
     *
     * @param VparAvisRepository $vparAvis
     * @param [type] $id
     * @return Response
     */
    #[IsGranted('ROLE_USER')]
    #[Route('/back/gestion-des-avis/desapprouver/{id}', name: 'app_avis_desapprove')]
    public function desapprove(VparAvisRepository $vparAvis, $id, EntityManagerInterface $manager): Response
    {
        $avis = $vparAvis->find($id);
        $avis->setApprove(false);
        $manager->persist($avis);
        $manager->flush();

        $this->addFlash('success', 'L\'avis a bien été désapprouvé');

        return $this->redirectToRoute('app_avis');
    }

    /**
     * BackOffice Avis Management
     *
     * @param VparAvisRepository $vparAvis
     * @param [type] $id
     * @return Response
     */
    #[IsGranted('ROLE_USER')]
    #[Route('/back/gestion-des-avis/nouveau', name: 'app_avis_new')]
    public function new(Request $request, EntityManagerInterface $manager): Response
    {
        $avis = new VparAvis();
        $form = $this->createForm(AvisType::class, $avis);
        $avis->setApprove(false);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $avis = $form->getData();
            $avis->setDate(new \DateTimeImmutable());
            $manager->persist($avis);
            $manager->flush();

            $this->addFlash('success', 'L\'avis a bien été ajouté');

            return $this->redirectToRoute('app_avis');
        }
        return $this->render('pages/avis/gAvisNew.html.twig', [
            'title_page' => 'Gestion des avis | V.Parrot',
            'h1_new' => 'Gestion des avis clients',
            'h2_new' => 'Ajouter un avis',
            'form' => $form->createView(),
        ]);
    }

    /**
     * BackOffice Avis Management
     *
     * @param VparAvisRepository $vparAvis
     * @param [type] $id
     * @return Response
     */
    #[IsGranted('ROLE_USER')]
    #[Route('/back/gestion-des-avis/supprimer/{id}', name: 'app_avis_delete')]
    public function delete(VparAvisRepository $avis, int $id, EntityManagerInterface $manager): Response
    {
        $avis = $avis->findOneBy(['id' => $id]);
        $manager->remove($avis);
        $manager->flush();

        $this->addFlash('success', 'L\'avis a bien été supprimé');

        return $this->redirectToRoute('app_avis');
    }
}
