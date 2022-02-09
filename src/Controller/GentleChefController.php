<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Article;
use App\Entity\Picture;
use App\Entity\NewActuality;
use App\Entity\Partner;
use App\Entity\Category;
use App\Entity\Portfolio;
use App\Entity\PortfolioType;
use App\Entity\Member;
use App\Entity\Video;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface; 
use Doctrine\ORM\EntityManager;

class GentleChefController extends AbstractController
{
    #[Route('/equipe', name: 'equipe')]
    public function showTeam(EntityManagerInterface $em)
    {
        $repo1 = $em->getRepository(Portfolio::class);
        $repo2 = $em->getRepository(PortfolioType::class);
        $repo3 = $em->getRepository(Member::class);

        $portfolio = $repo1-> findAll();
        $portfolioType = $repo2-> findAll();
        $member = $repo3-> findAll();

        return $this->render('gentle_chef/team.html.twig', [
            'controller_name' => 'GentleChefController',
            'portfolio' => $portfolio,
            'portfolioType' => $portfolioType,
            'member' => $member,
            
        ]);


    }

    #[Route('/films', name: 'films')]
    public function showMovies(Request $request,  EntityManagerInterface $em)
    {
        // Méthode findBy qui permet de récupérer les données avec des critères de filtre et de tri
        $repo1 = $em->getRepository(Video::class);
        $video = $repo1->findBy([],['project' => 'desc']);


        // $video = $paginator->paginate(
        //     $video, // Requête contenant les données à paginer (ici nos articles)
        //     $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
        //     6 // Nombre de résultats par page
        // );
        
        return $this->render('gentle_chef/movies.html.twig', [
            'controller_name' => 'GentleChefController',
            'video' => $video,
        ]);
    
        // $repo1 = $em->getRepository(Video::class);
        
        // $video = $repo1-> findAll();

        // return $this->render('gentle_chef/movies.html.twig', [
        //     'controller_name' => 'GentleChefController',
        //     'video' => $video,
            
        // ]);


    }

    #[Route('/', name: 'gentle_chef')]
    public function index(EntityManagerInterface $em): Response
    {
        $repo1 = $em->getRepository(Article::class);
        $repo2 = $em->getRepository(Picture::class);
        $repo3 = $em->getRepository(NewActuality::class);
        $repo4 = $em->getRepository(Partner::class);
        $repo5 = $em->getRepository(Category::class);
                        

        $article = $repo1-> findAll();
        $picture = $repo2-> findAll();
        $actuality = $repo3-> findAll();
        $partner = $repo4-> findAll();
        $category = $repo5-> findAll();

        return $this->render('gentle_chef/index.html.twig', [
            'controller_name' => 'GentleChefController',
            'article' => $article,
            'picture' => $picture,
            'actuality' => $actuality,
            'partner' => $partner,
            'category' => $category,
            
        ]);
    }
}
