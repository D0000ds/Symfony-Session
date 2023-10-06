<?php

namespace App\Controller;

use App\Entity\Cours;
use App\Entity\Session;
use App\Entity\Programme;
use App\Entity\Stagiaire;
use App\Form\SessionType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SessionController extends AbstractController
{
    #[Route('/session/new', name: 'new_session')]
    public function new( Request $request, EntityManagerInterface $entityManager): Response
    {
        $session = new Session();

        $form = $this->createForm(SessionType::class, $session);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $session = $form->getData();
            $entityManager->persist($session);
            $entityManager->flush();

            return $this->redirectToRoute('app_session');
        }
    
        return $this->render('session/new.html.twig', [
            'form' => $form->createView(),
            'edit' => $session->getId(),
            'sessionId' => $session->getId()
        ]);
    }

    #[Route('/session/{id}/edit', name: 'edit_session')]
    public function edit($id ,EntityManagerInterface $entityManager, Request $request): Response
    {
        $session = $entityManager->getRepository(Session::class)->find($id);

        $form = $this->createForm(SessionType::class, $session);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $session = $form->getData();
            $entityManager->persist($session);
            $entityManager->flush();

            return $this->redirectToRoute('app_session');
        }

        return $this->render('session/new.html.twig', [
            'form' => $form->createView(),
            'edit' => $session->getId(),
            'sessionId' => $session->getId()
        ]);
    }

    #[Route('/session/{id}', name: 'detail_session')]
    public function detail($id, EntityManagerInterface $entityManager): Response
    {
        
        $session = $entityManager->getRepository(Session::class)->find($id);
        $userInSession = $entityManager->getRepository(Session::class)->findAllUserInSession($id);

    
        $programmesParCategorie = [];

        
        foreach($session->getProgrammes() as $programme){
            $categorie = $programme->getCours()->getCategorie();
            $programmesParCategorie[] = $categorie;
        }
        $programmesParCategorie = array_unique($programmesParCategorie, SORT_REGULAR);
        
        
        return $this->render('session/detail.html.twig', [
            'session' => $session,
            'programmesParCategorie' => $programmesParCategorie,
            'userInSession' => $userInSession,
        ]);
    }


    #[Route('/session', name: 'app_session')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $sessions = $entityManager->getRepository(Session::class)->findBy([], ["libelle" => "ASC"]);
        
        return $this->render('session/index.html.twig', [
            'sessions' => $sessions,
        ]);
    }

    #[Route('/session/del/{id}/{idSta}', name: 'delete_stagiaire_session')]
    public function deleteStagiaire($id, EntityManagerInterface $entityManager, $idSta): Response
    {
        $session = $entityManager->getRepository(Session::class)->find($id);
        $stagiaire = $entityManager->getRepository(Stagiaire::class)->find($idSta);
        $session->removeStagiaire($stagiaire);
        $entityManager->flush();

        return $this->redirectToRoute('detail_session', ['id' => $id]);
    }

    #[Route('/session/add/{id}/{idSta}', name: 'add_stagiaire_session')]
    public function addStagiaire($id, EntityManagerInterface $entityManager, $idSta): Response
    {
        $session = $entityManager->getRepository(Session::class)->find($id);
        $stagiaire = $entityManager->getRepository(Stagiaire::class)->find($idSta);
        $session->addStagiaire($stagiaire);
        $entityManager->flush();

        return $this->redirectToRoute('detail_session', ['id' => $id]);
    }

    #[Route('/session/del/{id}', name: 'del_session')]
    public function Delete($id, EntityManagerInterface $entityManager): Response
    {
        $session = $entityManager->getRepository(Session::class)->find($id);
        $entityManager->remove($session);
        $entityManager->flush();

        return $this->redirectToRoute('app_session');
    }
}
