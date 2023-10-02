<?php

namespace App\Controller;
use App\Entity\Stagiaire;
use App\Form\StagiaireType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StagiaireController extends AbstractController
{
    #[Route('/stagiaire', name: 'app_stagiaire')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $stagiaires = $entityManager->getRepository(Stagiaire::class)->findBy([], ["nom" => "ASC"]);

        return $this->render('stagiaire/index.html.twig', [
            'stagiaires' => $stagiaires,
        ]);
    }
    

    #[Route('/stagiaire/new', name: 'new_stagiaire')]
    public function new(EntityManagerInterface $entityManager, Request $request): Response
    {
        $stagiaire = new Stagiaire();

        $form = $this->createForm(StagiaireType::class, $stagiaire);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $stagiaire = $form->getData();
            $entityManager->persist($stagiaire);
            $entityManager->flush();

            return $this->redirectToRoute('app_stagiaire');
        }

        return $this->render('stagiaire/new.html.twig', [
            'formStagiaire' => $form->createView(),
            'edit' => $stagiaire->getId(),
        ]);
    }

    #[Route('/stagiaire/{id}/edit', name: 'edit_stagiaire')]
    public function edit($id ,EntityManagerInterface $entityManager, Request $request): Response
    {
        $stagiaire = $entityManager->getRepository(Stagiaire::class)->find($id);

        $form = $this->createForm(StagiaireType::class, $stagiaire);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $stagiaire = $form->getData();
            $entityManager->persist($stagiaire);
            $entityManager->flush();

            return $this->redirectToRoute('app_stagiaire');
        }

        return $this->render('stagiaire/new.html.twig', [
            'formStagiaire' => $form->createView(),
            'edit' => $stagiaire->getId(),
        ]);
    }


    #[Route('/stagiaire/{id}', name: 'detail_stagiaire')]
    public function Detail($id, EntityManagerInterface $entityManager): Response
    {
        $stagiaire = $entityManager->getRepository(Stagiaire::class)->find($id);

        return $this->render('stagiaire/detail.html.twig', [
            'stagiaire' => $stagiaire,
        ]);
    }

}
