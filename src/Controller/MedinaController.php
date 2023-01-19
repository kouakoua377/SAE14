<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MedinaController extends AbstractController
{

    
    #[Route('/medina', name: 'app_medina')]
    public function index(): Response
    {
        return $this->render('medina/index.html.twig', [
            'controller_name' => 'MedinaController',
        ]);
    }
}
