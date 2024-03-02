<?php

namespace App\Controller;

use App\Entity\Recommendation;
use App\Form\RecommendationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/recommendation')]
#[IsGranted('ROLE_ADMIN')]
class RecommendationController extends AbstractController
{
    #[Route('/new', name: 'recommendation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $recommendation = new Recommendation();
        $form = $this->createForm(RecommendationType::class, $recommendation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($recommendation);
            $entityManager->flush();

            return $this->redirectToRoute('region_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('recommendation/new.html.twig', [
            'recommendation' => $recommendation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/edit', name: 'recommendation_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        Recommendation $recommendations,
        EntityManagerInterface $entityManager
    ): Response {
        $form = $this->createForm(RecommendationType::class, $recommendations);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('region_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('recommendation/edit.html.twig', [
            'recommendations' => $recommendations,
            'form' => $form,
        ]);
    }

    #[Route(
        '/{id}',
        name: 'recommendation_delete',
        methods: ['POST']
    )]
    public function delete(
        Request $request,
        Recommendation $recommendation,
        EntityManagerInterface $entityManager
    ): Response {
        if ($this->isCsrfTokenValid('delete' . $recommendation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($recommendation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('region_index', [], Response::HTTP_SEE_OTHER);
    }
}
