<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthorController extends AbstractController
{

    #[Route('/showAuthor/{name}', name: 'showAuthor')]
    public function showAuthor($name){
        return $this->render('author/index.html.twig', [
            'name' => $name,
        ]);
    }
}
