<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class WorksController extends AbstractController
{
    #[Route('/portfolio', name: 'app_works')]
    public function index(): Response
    {
        return $this->render('works/index.html.twig', [
            'controller_name' => 'WorksController',
        ]);
    }
}
