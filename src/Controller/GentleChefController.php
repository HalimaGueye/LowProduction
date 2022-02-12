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

  #[Route('/', name: 'home')]
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

      return $this->render('gentle_chef/home.html.twig', [
          'controller_name' => 'GentleChefController',
          'article' => $article,
          'picture' => $picture,
          'actuality' => $actuality,
          'partner' => $partner,
          'category' => $category,
      ]);
  }

  #[Route('/histoire', name: 'story')]
  public function showStory(EntityManagerInterface $em)
  {
    return $this->render('gentle_chef/story.html.twig');
  }

  #[Route('/equipe', name: 'team')]
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

  #[Route('/films', name: 'movies')]
  public function showMovies(Request $request,  EntityManagerInterface $em)
  {
      // Méthode findBy qui permet de récupérer les données avec des critères de filtre et de tri
      $repo1 = $em->getRepository(Video::class);
      $video = $repo1->findBy([],['project' => 'desc']);

      return $this->render('gentle_chef/movies.html.twig', [
          'controller_name' => 'GentleChefController',
          'video' => $video,
      ]);
  }

  #[Route('/film', name: 'movie')]
  public function showMovie(EntityManagerInterface $em)
  {
    return $this->render('gentle_chef/movie.html.twig');
  }

  #[Route('/etudes', name: 'studies')]
  public function showStudies(EntityManagerInterface $em)
  {
    return $this->render('gentle_chef/studies.html.twig');
  }

  #[Route('/etude', name: 'study')]
  public function showStudy(EntityManagerInterface $em)
  {
    return $this->render('gentle_chef/study.html.twig');
  }

  #[Route('/actualites', name: 'news')]
  public function showNews(EntityManagerInterface $em)
  {
    return $this->render('gentle_chef/news.html.twig');
  }

  #[Route('/actualite', name: 'new')]
  public function showNew(EntityManagerInterface $em)
  {
    return $this->render('gentle_chef/new.html.twig');
  }

  #[Route('/soutenir', name: 'support')]
  public function showSupport(EntityManagerInterface $em)
  {
    return $this->render('gentle_chef/support.html.twig');
  }

  #[Route('/contact', name: 'contact')]
  public function showContact(EntityManagerInterface $em)
  {
    return $this->render('gentle_chef/contact.html.twig');
  }

}
