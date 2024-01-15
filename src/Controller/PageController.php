<?php

namespace App\Controller;

use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    #[Route('/', name: 'app_page')]
    public function index(): Response
    {
        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

/**
 * Ici on créé une nouvelle route pour la page blog
 * On a besoin de créer une nouvelle vue page/blog.html.twig
 */

    #[Route('/blog', name: 'app_blog', methods: ['GET', 'POST'])]
    public function blog(): Response
    {
        return $this->render('page/blog.html.twig', [
            'title' => 'Tous les articles du blog', // Variable quelconque
        ]);
    }
}
