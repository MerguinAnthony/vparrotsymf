<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Repository\VparHourRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request, EntityManagerInterface $manager, VparHourRepository $hour): Response
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
}
