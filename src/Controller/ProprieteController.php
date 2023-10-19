<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProprieteController extends AbstractController
{
    #[Route('/propriete', name: 'app_propriete')]
    public function index(): Response
    {
        return $this->render('propriete/propriete.html.twig', [
            'controller_name' => 'ProprieteController',
        ]);
    }
}
