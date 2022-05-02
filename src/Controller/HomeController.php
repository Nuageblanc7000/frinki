<?php

namespace App\Controller;

use DateTimeImmutable;
use App\Repository\AnnoncesRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * permet de retourner
     *
     * @param AnnoncesRepository $repo
     * @return Response
     */
    #[Route('/', name: 'home')]
    public function home(AnnoncesRepository $repo): Response
    {   
        return $this->render('home/home.html.twig', [
            'annonces' => $repo->FindAnnonceCurrent(3)
        ]);
    }
    #[Route('/inscription', name: 'inscription')]
    public function vue(): Response
    {
        return $this->render('home/inscription.html.twig');
    }
}
