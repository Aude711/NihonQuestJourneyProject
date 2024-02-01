<?php

namespace App\Controller;

use App\Entity\City;
use App\Entity\Region;
use App\Repository\CityRepository;
use App\Repository\RecommendationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/city', name: 'city_')]
class CityController extends AbstractController
{
    #[Route('/{id}', name: 'view')]
    public function show(CityRepository $cityRepository, City $id, RecommendationRepository $adviceRepository): Response
    {
        $city = $cityRepository->findOneBy(['id' => $id]);
        $recommendation = $adviceRepository->findBy(['city' => $city]);
        return $this->render('city/view.html.twig', [
            'city' => $city,
            'recommendation' => $recommendation,
        ]);
    }
}
