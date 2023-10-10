<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\AddemployeeType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EmployeeController extends AbstractController
{
    #[Route('/back/gestion-des-employes', name: 'app_employee')]
    public function index(UserRepository $user, PaginatorInterface $paginator, Request $request): Response
    {

        $users = $paginator->paginate(
            $user->findAll(),
            $request->query->getInt('page', 1),
            10
        );

        return $this->render('pages/employee/gEmployee.html.twig', [
            'title_page' => 'Gestion des employés | V.Parrot',
            'nav_item1' => 'Retour vers le site',
            'nav_item2' => 'Gestion des employés',
            'nav_item3' => 'Gestion des services',
            'nav_item4' => 'Gestion des horaires',
            'nav_item5' => 'Gestion des ventes',
            'nav_item6' => 'Gestion des avis clients',
            'users' => $users,
        ]);
    }


    #[Route('/back/gestion-des-employes/nouveau', name: 'app_registration', methods: ['GET', 'POST'])]
    public function add(Request $request, EntityManagerInterface $manager): Response
    {
        $user = new User();
        $user->setRoles(['ROLE_USER']);
        $form = $this->createForm(AddemployeeType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();

            $this->addFlash('success', 'Votre salarié a bien été ajouté');

            $manager->persist($user);
            $manager->flush();

            return $this->redirectToRoute('app_employee');
        }

        return $this->render('pages/employee/gEmployeeNew.html.twig', [
            'title_page' => 'Ajout salarié | V.Parrot',
            'nav_item1' => 'Retour vers le site',
            'nav_item2' => 'Gestion des employés',
            'nav_item3' => 'Gestion des services',
            'nav_item4' => 'Gestion des horaires',
            'nav_item5' => 'Gestion des ventes',
            'nav_item6' => 'Gestion des avis clients',
            'form' => $form->createView(),
        ]);
    }


    #[Route('/back/gestion-des-employes/edition/{id}', name: 'app_gestion_employee_edit', methods: ['GET', 'POST'])]
    public function edit(UserRepository $user, int $id, EntityManagerInterface $manager, Request $request): Response
    {
        $user = $user->find($id);
        $form = $this->createForm(AddemployeeType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();

            $this->addFlash('success', 'Votre salarié a bien été modifié');

            $manager->persist($user);
            $manager->flush();

            return $this->redirectToRoute('app_employee');
        }

        return $this->render('pages/employee/gEmployeeEdit.html.twig', [
            'title_page' => 'modification d\'un employé | V.Parrot',
            'nav_item1' => 'Retour vers le site',
            'nav_item2' => 'Gestion des employés',
            'nav_item3' => 'Gestion des services',
            'nav_item4' => 'Gestion des horaires',
            'nav_item5' => 'Gestion des ventes',
            'nav_item6' => 'Gestion des avis clients',
            'form' => $form->createView(),
        ]);
    }

    #[Route('/back/gestion-des-employes/suppression/{id}', name: 'app_gestion_employee_delete', methods: ['GET'])]
    public function delete(UserRepository $user, int $id, EntityManagerInterface $manager): Response
    {

        $user = $user->find($id);
        $manager->remove($user);
        $manager->flush();

        $this->addFlash('success', 'Votre salarié a bien été supprimé');

        return $this->redirectToRoute('app_employee');
    }
}