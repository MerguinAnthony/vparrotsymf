<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route('/connexion', name: 'app_security', methods: ['GET', 'POST'])]
    public function index(AuthenticationUtils $authenticationUtils): Response
    {
        return $this->render('pages/security/login.html.twig', [
            'title_page' => 'Connexion | V.Parrot',
            'h1_index' => 'Connexion',
            'h2_index' => 'Veuillez rentrer votre mot de passe et votre identifiant pour vous connecter.',
            'connec_email' => 'E-mail',
            'connec_password' => 'Mot de passe',
            'connec_submit' => 'Se connecter',
            'connec_warning' => 'Ne communiquer jamais votre identifiant et votre mot de passe.',
            'last_username' => $authenticationUtils->getLastUsername(),
            'bad_credentials' => $authenticationUtils->getLastAuthenticationError(),
            'bad_credentials_message' => 'Identifiant ou mot de passe incorrect.',
        ]);
    }

    #[Route('/deconnexion', name: 'app_logout', methods: ['GET'])]
    public function logout()
    {
        // controller can be blank: it will never be executed!
    }
}
