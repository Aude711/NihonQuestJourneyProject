<?php

namespace App\Controller;

use App\Repository\CityRepository;
use App\Repository\RegionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegionController extends AbstractController
{
    #[Route('/region', name: 'app_region')]
    public function index(RegionRepository $regionRepository, CityRepository $cityRepository): Response
    {
        $region = $regionRepository->findAll();
        $city = $cityRepository->findAll();
        return $this->render('region/index.html.twig', [
            'region' => $region,
            'city' => $city,
        ]);
    }
}
