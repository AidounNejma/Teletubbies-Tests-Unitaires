<?php

namespace App\Controller;

use App\Entity\Teletubbies;
use App\Form\TeletubbiesType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeletubbiesController extends AbstractController
{
    #[Route('/teletubbies', name: 'teletubbies')]
    public function index(): Response
    {
        return $this->render('teletubbies/index.html.twig', [
            'controller_name' => 'TeletubbiesController',
        ]);
    }

    #[Route('/creer-un-teletubbies', name: 'teletubbies_create')]
    public function createTeletubbies(Request $request, EntityManagerInterface $entityManager): Response
    {
        $teletubbies = new Teletubbies();

        $form = $this->createForm(TeletubbiesType::class, $teletubbies);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $entityManager->persist($teletubbies);
            $entityManager->flush();
        }

        return $this->render('teletubbies/create.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
