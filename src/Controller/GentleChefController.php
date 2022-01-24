<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
//use App\Entity\Article;
//use Doctrine\ORM\EntityManager;

class GentleChefController extends AbstractController
{
    #[Route('/', name: 'gentle_chef')]
    public function index(ManagerRegistry $doctrine): Response
    {
        /*$article = $doctrine
                        ->getRepository(Article::class)
        ;*/
        return $this->render('gentle_chef/index.html.twig', [
            'controller_name' => 'GentleChefController',
            
        ]);
    }
}
