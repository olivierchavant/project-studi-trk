<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileRecruteurController extends AbstractController
{
    #[Route('/profile/recruteur', name: 'app_profile_recruteur')]
    public function index(): Response
    {
        return $this->render('profile_recruteur/index.html.twig', [
            'controller_name' => 'ProfileRecruteurController',
        ]);
    }
}
