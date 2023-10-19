<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactezController extends AbstractController
{
    #[Route('/contactez', name: 'app_contactez')]
    public function index(): Response
    {
        return $this->render('contactez/contact.html.twig', [
            'controller_name' => 'ContactezController',
        ]);
    }
}
