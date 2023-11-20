<?php

namespace App\Controller;

use App\Entity\Bien;
use App\Repository\BienRepository;
use App\Form\BienFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class ImmobilierController extends AbstractController
{
        #[Route('/immobilier', name: 'app_immobilier')]
        #[Route('/immobilier/edit/{id}', name: 'app_immobilier_edit')]
        public function index(Request $request, BienRepository $BienRepository, EntityManagerInterface $entityManager, #[Autowire('%photo_dir%')] string $photoDir, ?int $id = null): Response
        {
            $bien =$id ? $BienRepository->find($id) : new Bien();

            $biens = $BienRepository->findAll();

            $form = $this->createForm(BienFormType::class, $bien);
        
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {

                $entityManager->persist($bien);
                $entityManager->flush();

                //$this->addFlash('success', 'Info concours enregistré avec succès!');
           }
        
            return $this->render('immobilier/index.html.twig', [
                'form' => $form->createView(),
                'editMode' => $bien->getId() !== null,
                'biens' => $biens,
            ]);
    
        }
}