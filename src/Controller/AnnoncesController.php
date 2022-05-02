<?php

namespace App\Controller;

use App\Repository\AnnoncesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnnoncesController extends AbstractController
{
    #[Route('/annonces', name: 'annonces')]
    public function AllAnnonces(AnnoncesRepository $repo): Response
    {
        return $this->render('annonces/index.html.twig', [
            "annonces" => $repo->findAll()
        ]);
    }
}
