<?php

namespace App\Controller;

use App\Entity\Region;
use App\Repository\CityRepository;
use App\Repository\RecommendationRepository;
use App\Repository\RegionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/region', name: 'region_')]
class RegionController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(RegionRepository $regionRepository, CityRepository $cityRepository): Response
    {
        $region = $regionRepository->findAll();
        $city = $cityRepository->findAll();
        return $this->render('region/index.html.twig', [
            'region' => $region,
            'city' => $city,
        ]);
    }

    #[Route('/{id}', name: 'view', methods: ['GET', 'POST'])]
    public function show(
        Region $region,
        CityRepository $cityRepository,
        RecommendationRepository $adviceRepository
    ): Response {
        $city = $cityRepository->findBy(['region' => $region]);
        $recommendation = $adviceRepository->findBy(['city' => $city]);
        return $this->render('region/view.html.twig', [
            'region' => $region,
            'city' => $city,
            'recommendation' => $recommendation,
        ]);
    }
}
