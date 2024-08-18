<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AdministController extends AbstractController
{
    #[Route('/administ', name: 'app_administ')]
    public function index(): Response
    {
        return $this->render('administ/index.html.twig', [
            'controller_name' => 'AdministController',
        ]);
    }
}
