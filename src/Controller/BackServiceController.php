<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BackServiceController extends AbstractController
{
    #[Route('/back/service', name: 'app_back_service')]
    public function index(): Response
    {
        return $this->render('pages/back_service/index.html.twig', []);
    }
}
