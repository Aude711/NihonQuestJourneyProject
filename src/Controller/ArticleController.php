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
        // CommentRepository $commentRepository,
        EntityManagerInterface $entityManager,
    ): Response {


        // $comments = $commentRepository->findBy(['recipe' => $recipe]);
        // $totalLikers = $userRepository->countLikersByRecipe($recipe);
        // $totalNote = $commentRepository->averageNote($recipe);


        // $comment = new Comment();

        // $commentForm = $this->createForm(CommentType::class, $comment);
        // $comment->setRecipe($recipe);
        // $comment->setCommentator($this->getUser());
        // $commentForm->handleRequest($request);

        // if ($commentForm->isSubmitted() && $commentForm->isValid()) {
        //     $entityManager->persist($comment);
        //     $entityManager->flush();

        //     return $this->redirectToRoute('app_recipe_show',
        // ['slug' => $recipe->getSlug()], Response::HTTP_SEE_OTHER);
        // }


        return $this->render('article/show.html.twig', [
            'articles' => $articles,
        ]);
    }
}
