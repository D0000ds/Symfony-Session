<?php

namespace App\Controller;

use App\Entity\Programme;
use App\Form\ProgrammeType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class ProgrammeController extends AbstractController
{
    #[Route('/programme/new', name: 'new_programme')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $programme = new Programme();

        $form = $this->createForm(ProgrammeType::class, $programme);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $programme = $form->getData();
            $entityManager->persist($programme);
            $entityManager->flush();

            return $this->redirectToRoute('app_home');
        }
    
        return $this->render('programme/new.html.twig', [
            'formProgramme' => $form->createView()
        ]);
    }
}
