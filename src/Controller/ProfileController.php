<?php

namespace App\Controller;

use App\Repository\RecommendationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/profil')]
class ProfileController extends AbstractController
{
    #[Route('/', name: 'profil')]
    public function profile(RecommendationRepository $adviceRepository): Response
    {
        $user = $this->getUser();

        return $this->render('profil/profile.html.twig', [
            'user' => $user,
        ]);
    }
}
