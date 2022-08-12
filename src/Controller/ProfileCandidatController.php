<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileCandidatController extends AbstractController
{
    #[Route('/profile/candidat', name: 'app_profile_candidat')]
    public function index(): Response
    {
        return $this->render('profile_candidat/index.html.twig', [
            'controller_name' => 'ProfileCandidatController',
        ]);
    }
}
