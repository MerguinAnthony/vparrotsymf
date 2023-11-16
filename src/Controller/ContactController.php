<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Repository\UserRepository;
use App\Repository\ContactRepository;
use App\Repository\VparHourRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\VparVehicleRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    /**
     * BackOffice Employee Management
     *
     * @param UserRepository $user
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @return Response
     */
    #[Route('/back/gestion-des-messages', name: 'app_contact')]
    #[IsGranted('ROLE_USER')]
    public function index(ContactRepository $contact, PaginatorInterface $paginator, Request $request): Response
    {

        $contact = $paginator->paginate(
            $contact->findAll(),
            $request->query->getInt('page', 1),
            5
        );

        return $this->render('pages/contact/gContact.html.twig', [
            'title_page' => 'messagerie | V.Parrot',
            'nav_item1' => 'Retour vers le site',
            'nav_item2' => 'Gestion des ventes',
            'nav_item3' => 'Gestion des services',
            'nav_item4' => 'Gestion des horaires',
            'nav_item5' => 'Gestion des employés',
            'nav_item6' => 'Gestion des avis clients',
            'nav_item7' => 'Messagerie',
            'nav_item8' => 'Déconnexion',
            'h1_index' => 'Messagerie',
            'count_messages' => 'Nombre de messages reçus :',
            'th_lastname' => 'Nom',
            'th_firstname' => 'Prénom',
            'th_phone' => 'Téléphone',
            'th_email' => 'Email',
            'th_message' => 'Message',
            'td_delete' => 'Supprimer',
            'messages' => $contact,
        ]);
    }

    /**
     * Delete a message
     *
     * @param Contact $contact
     * @param EntityManagerInterface $manager
     * @return Response
     */
    #[Route('/back/gestion-des-messages/supprimer/{id}', name: 'app_contact_delete')]
    #[IsGranted('ROLE_USER')]
    public function delete(Contact $contact, EntityManagerInterface $manager): Response
    {
        $manager->remove($contact);
        $manager->flush();

        return $this->redirectToRoute('app_contact');
    }

    /**
     * Send, message from the contact form
     *
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @param VparHourRepository $hour
     * @return Response
     */
    #[Route('/contact', name: 'app_contact_new', methods: ['GET', 'POST'])]
    public function add(Request $request, EntityManagerInterface $manager, VparHourRepository $hour): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contact = $form->getData();
            $manager->persist($contact);
            $manager->flush();

            return $this->redirectToRoute('home.index');
        }

        return $this->render('pages/contact/contact.html.twig', [
            'title_page' => 'Contact | V.Parrot',
            'nav_item1' => 'Services',
            'nav_item2' => 'Ventes véhicules',
            'nav_item3' => 'Avis',
            'nav_item4' => 'Contactez-nous',
            'h1_contact' => 'Contactez-nous',
            'controller_name' => 'ContactController',
            'hour' => $hour->findAll(),
            'form' => $form->createView(),
        ]);
    }


    #[Route('/contact/{id}', name: 'app_contact_new_vehicule', methods: ['GET', 'POST'])]
    public function contactVehicles(int $id, VparVehicleRepository $vehicleRepository, Request $request, EntityManagerInterface $manager, VparHourRepository $hour): Response
    {
        $vehicle = $vehicleRepository->find($id);
        $form = $this->createForm(ContactType::class, null, [
            'data_class' => Contact::class,
        ]);

        // Ajoutez les données préremplies directement au formulaire
        $form->get('subject')->setData(sprintf('Demande d\'information - %s %s', $vehicle->getBrand(), $vehicle->getModel()));
        $form->get('message')->setData(sprintf(
            'Bonjour,
je suis intéressé(e) par ce véhicule %s %s.
Pourriez-vous me fournir plus d\'informations ?',
            $vehicle->getBrand(),
            $vehicle->getModel()
        ));

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contact = $form->getData();
            $manager->persist($contact);
            $manager->flush();

            return $this->redirectToRoute('home.index');
        }

        return $this->render('pages/contact/contact.html.twig', [
            'title_page' => 'Contact | V.Parrot',
            'nav_item1' => 'Services',
            'nav_item2' => 'Ventes véhicules',
            'nav_item3' => 'Avis',
            'nav_item4' => 'Contactez-nous',
            'h1_contact' => 'Contactez-nous',
            'controller_name' => 'ContactController',
            'hour' => $hour->findAll(),
            'form' => $form->createView(),
            'selected_vehicle' => $vehicle,
        ]);
    }
}
