<?php

namespace App\Controller;

use App\Entity\City;
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

    #[Route('/{id}', name: 'show', methods: ['GET', 'POST'])]
    public function show(
        Region $region,
        RecommendationRepository $adviceRepository,
        CityRepository $cityRepository,
        RegionRepository $regionRepository,
    ): Response {

        $cities = $cityRepository->findBy(['region' => $region]);
        $recommendations = $adviceRepository->findBy(['city' => $cities]);
        return $this->render('region/show.html.twig', [
            'region' => $region,
            'cities' => $cities,
            'recommendations' => $recommendations,
        ]);
    }
}
