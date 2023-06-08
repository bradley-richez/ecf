<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/cars',name:'app_cars')]
    public function cars(): Response 
    {
        return $this->render('cars/cars.html.twig');
    }
    #[Route('/services',name:'app_services')]
    public function services(): Response 
    {
        return $this->render('services/services.html.twig');
    }
}
