<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ServicsController extends AbstractController
{
    #[Route('/servics', name: 'app_servics')]
    public function index(): Response
    {
        return $this->render('servics/index.html.twig', [
            'controller_name' => 'ServicsController',
        ]);
    }
}
