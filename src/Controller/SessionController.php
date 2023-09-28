<?php

namespace App\Controller;

use App\Entity\Session;
use App\Entity\Cours;
use App\Entity\Programme;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SessionController extends AbstractController
{
    #[Route('/session/{id}', name: 'detail_session')]
    public function Detail($id, EntityManagerInterface $entityManager): Response
    {
        $session = $entityManager->getRepository(Session::class)->find($id);

        $programmesParCategorie = [];

        foreach($session->getProgrammes() as $programme){
            $categorie = $programme->getCours()->getCategorie();
            $programmesParCategorie[] = $categorie;
        }
        $programmesParCategorie = array_unique($programmesParCategorie, SORT_REGULAR);
        
        
        return $this->render('session/detail.html.twig', [
            'session' => $session,
            'programmesParCategorie' => $programmesParCategorie,
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
}
