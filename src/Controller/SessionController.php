<?php

namespace App\Controller;

use App\Entity\Session;
use App\Entity\Cours;
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
       
        return $this->render('session/detail.html.twig', [
            'session' => $session,
        ]);
    }
}
