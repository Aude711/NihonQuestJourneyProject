<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AProposController extends AbstractController
{
    #[Route('/apropos', name: 'apropos')]
    public function index(): Response
    {
        return $this->render('APropos/apropos.html.twig');
    }
}
