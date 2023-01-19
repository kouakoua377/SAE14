<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EsdrasController extends AbstractController
{
    /**
     * @Route("/esdras", name="app_esdras")
     */
    public function index(): Response
    {
        return $this->render('esdras/index.html.twig', [
            'controller_name' => 'EsdrasController',
        ]);
    }

/**
     * @Route("/esdras/portfolio", name="app_esdras_portfolio")
     */
    public function portfolio(): Response
    {
        return $this->render('esdras/portfolio.html.twig', [
            'controller_name' => 'EsdrasController',
        ]);
    }
     
    /**
     * @Route("/esdras/cv", name="app_esdras_cv")
     */
    public function cv(): Response
    {
        return $this->render('esdras/cv.html.twig', [
            'controller_name' => 'EsdrasController',
        ]);
    }
     
    /**
     * @Route("/esdras/contact", name="app_esdras_contact")
     */
    public function contact(): Response
    {
        return $this->render('esdras/contact.html.twig', [
            'controller_name' => 'EsdrasController',
        ]);
    }


}
