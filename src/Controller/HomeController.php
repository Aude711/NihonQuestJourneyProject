<?php

namespace App\Controller;

use App\Repository\ArticlesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(ArticlesRepository $articlesRepository): Response
    {
        $totalArticles = $articlesRepository->countArticles();

        $articles = $articlesRepository->findBy(
            [], // No specific conditions
            ['id' => 'DESC'],
            4
        );
        return $this->render('index.html.twig', [
            'articles' => $articles,
            'totalArticles' => $totalArticles,
        ]);
    }
}
