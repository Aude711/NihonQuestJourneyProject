<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CityController extends AbstractController
{
    #[Route('/{id}', name: 'city')]
    public function show(string $cityRepository): Response
    {
        $city = $cityRepository;

        return $this->render('city/view.html.twig', [
            'city' => $city,
        ]);
    }
}
