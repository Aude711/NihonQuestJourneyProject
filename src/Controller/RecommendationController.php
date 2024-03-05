<?php

namespace App\Controller;

use App\Entity\Recommendation;
use App\Form\RecommendationType;
use App\Service\AccessControl;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/recommendation', name: 'recommendation_')]
class RecommendationController extends AbstractController
{
    private AccessControl $accessControl;

    public function __construct(
        AccessControl $accessControl,
    ) {
        $this->accessControl = $accessControl;
    }

    #[Route('/new', name: 'new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $userLoggedIn = $this->accessControl->checkIfUserLoggedIn();
        if ($userLoggedIn !== true) {
            $this->addFlash('danger', 'Connectez-vous pour accéder à cette ressource.');

            return $this->redirectToRoute('region_index', [], Response::HTTP_SEE_OTHER);
        }

        $recommendation = new Recommendation();
        $form = $this->createForm(RecommendationType::class, $recommendation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $recommendation->setOwner($this->getUser());
            $entityManager->persist($recommendation);
            $entityManager->flush();

            return $this->redirectToRoute('region_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('recommendation/new.html.twig', [
            'recommendation' => $recommendation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/edit', name: 'edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        Recommendation $recommendations,
        EntityManagerInterface $entityManager
    ): Response {

        $userLoggedIn = $this->accessControl->checkIfUserLoggedIn();
        if ($userLoggedIn !== true) {
            $this->addFlash('danger', 'Connecter vous pour accéder à cette ressource.');
            return $this->redirectToRoute('region_index', [], Response::HTTP_SEE_OTHER);
        }
        // call the AccessControl service => control the owner
        $userLoggedIsAuthor = $this->accessControl->checkIfLoggedUserIsAuthor($recommendations);
        if ($userLoggedIsAuthor !== true) {
            $this->addFlash('danger', 'Seul l\'auteur de la recommendation peut la modifier.');
            return $this->redirectToRoute('region_index', [], Response::HTTP_SEE_OTHER);
        }

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

    #[Route('/{id}', name: 'delete', methods: ['POST'])]
    public function delete(
        Request $request,
        Recommendation $recommendation,
        EntityManagerInterface $entityManager
    ): Response {
        // call the AccessControl service => control if there is a connection
        $userLoggedIn = $this->accessControl->checkIfUserLoggedIn();
        if ($userLoggedIn !== true) {
            $this->addFlash('danger', 'Connecter vous pour accéder à cette ressource.');

            return $this->redirectToRoute('region_index', [], Response::HTTP_SEE_OTHER);
        }
        // call the AccessControl service => control the owner
        $userLoggedIsAuthor = $this->accessControl->checkIfLoggedUserIsAuthor($recommendation);
        if ($userLoggedIsAuthor !== true) {
            $this->addFlash('danger', 'Seul l\'auteur de la reommendation peut la supprimer.');

            return $this->redirectToRoute('region_index', [], Response::HTTP_SEE_OTHER);
        }

        if ($this->isCsrfTokenValid('delete' . $recommendation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($recommendation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('region_index', [], Response::HTTP_SEE_OTHER);
    }
}
