<?php

namespace App\Controller;

use App\Entity\Articles;
use App\Repository\ArticlesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/article', name: 'article_')]
class ArticleController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(ArticlesRepository $articlesRepository): Response
    {
        $articles = $articlesRepository->findAll();
        return $this->render('article/index.html.twig', [
            'articles' => $articles,
        ]);
    }

    #[Route('/{id}', name: 'show', methods: ['GET', 'POST'])]
    public function show(
        Request $request,
        Articles $articles,
        EntityManagerInterface $entityManager,
    ): Response {

        // $totalLikers = $userRepository->countLikersByRecipe($recipe);


        return $this->render('article/show.html.twig', [
            'articles' => $articles,
        ]);
    }
}
