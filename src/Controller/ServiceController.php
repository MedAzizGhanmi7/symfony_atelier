<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServiceController extends AbstractController
{
    #[Route('/service/{name}', name: 'app_service')]
    public function showService($name): Response
    {
        return $this->render('service/index.html.twig', [
            'controller_name' => 'ServiceController',
            'name' => $name ,


        ]);
    }
    #[Route('/goToIndex', name: 'goToIndex')]
    public function goToIndex(): Response
    {
      return $this->redirectToRoute('app_home');
    }



}
