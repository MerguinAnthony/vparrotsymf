<?php

namespace App\Controller;


use App\Form\AvisType;
use App\Entity\VparAvis;
use App\Repository\VparAvisRepository;
use App\Repository\VparHourRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\VparServiceRepository;
use App\Repository\VparVehicleRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * Home Page
     *
     * @param EntityManagerInterface $manager
     * @param VparServiceRepository $VparService
     * @param VparVehicleRepository $VparVehicle
     * @param VparAvisRepository $VparAvis
     * @param VparHourRepository $VparHour
     * @param Request $request
     * @param PaginatorInterface $paginator
     * @return Response
     */
    #[Route('/', name: 'home.index', methods: ['GET', 'POST'])]
    public function index(EntityManagerInterface $manager, VparServiceRepository $VparService, VparVehicleRepository $VparVehicle, VparAvisRepository $VparAvis, VparHourRepository $VparHour, Request $request, PaginatorInterface $paginator): Response
    {

        $vehicles = $paginator->paginate(
            $VparVehicle->findBy([], ['updatedAt' => 'DESC']),
            $request->query->getInt('page', 1),
            3
        );

        $services = $VparService->findAll();

        $avisMoyen = $VparAvis->getAverageRank();

        $avisA = $paginator->paginate(
            $VparAvis->findBy(['approve' => true], ['rank' => 'DESC']),
            $request->query->getInt('page', 1),
            3
        );

        $hour = $VparHour->findAll();

        $avis = new VparAvis();
        $form = $this->createForm(AvisType::class, $avis);
        $avis->setApprove(false);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $avis = $form->getData();
            $avis->setDate(new \DateTimeImmutable());
            $manager->persist($avis);
            $manager->flush();

            $this->addFlash('success', 'Votre avis a bien été envoyé !');

            return $this->redirectToRoute('home.index');
        }


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
            'avis' => $avisA,
            'hour' => $hour,
            'form' => $form->createView(),
            'avis_moyen' => $avisMoyen,
        ]);
    }
}
