<?php

namespace App\Controller;

use App\Entity\City;
use App\Entity\Comment;
use App\Form\CommentType;
use App\Repository\CityRepository;
use App\Repository\CommentRepository;
use App\Repository\RecommendationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/city', name: 'city_')]
class CityController extends AbstractController
{
    #[Route('/{id}', name: 'show')]
    public function show(
        CityRepository $cityRepository,
        City $id,
        RecommendationRepository $adviceRepository,
        CommentRepository $commentRepository,
        EntityManagerInterface $entityManager,
        Request $request
    ): Response {
        $city = $cityRepository->findOneBy(['id' => $id]);
        $recommendation = $adviceRepository->findBy(['city' => $city]);
        $comments = $commentRepository->findBy(['city' => $city]);

        $comment = new Comment();

        $commentForm = $this->createForm(CommentType::class, $comment);
        $comment->setCity($city);
        $comment->setCommentator($this->getUser());
        $commentForm->handleRequest($request);

        if ($commentForm->isSubmitted() && $commentForm->isValid()) {
            $entityManager->persist($comment);
            $entityManager->flush();
        }

        return $this->render('city/show.html.twig', [
            'city' => $city,
            'comments' => $comments,
            'commentForm' => $commentForm,
            'recommendation' => $recommendation,
        ]);
    }
}
