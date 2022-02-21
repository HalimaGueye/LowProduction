<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Comic;
use App\Entity\Article;
use App\Entity\Picture;
use App\Entity\NewActuality;
use App\Entity\Partner;
use App\Entity\Supporters;
use App\Entity\Category;
use App\Entity\Project;
use App\Entity\ProjectCategory;
use App\Entity\Portfolio;
use App\Entity\PortfolioType;
use App\Entity\Member;
use App\Entity\MemberProject;
use App\Entity\Video;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface;
use Doctrine\ORM\EntityManager;

class GentleChefController extends AbstractController
{

  #[Route('/', name: 'home')]
  public function index(EntityManagerInterface $em): Response
  {
      return $this->render('gentle_chef/home.html.twig', [
          'controller_name' => 'GentleChefController',
          'partners' => $em->getRepository(Partner::class)->findAll(),
          'projects' => $em->getRepository(Project::class)->findAll(),
          'supporters' => $em->getRepository(Supporters::class)->findAll(),
          'news' => $em->getRepository(NewActuality::class)->findLastOnes(5)
      ]);
  }

  #[Route('/histoire', name: 'story')]
  public function showStory(EntityManagerInterface $em)
  {
    return $this->render('gentle_chef/story.html.twig', [
      'comics' => $em->getRepository(Comic::class)->findAll()
    ]);
  }

  #[Route('/equipe', name: 'team')]
  public function showTeam(EntityManagerInterface $em)
  {
      return $this->render('gentle_chef/team.html.twig', [
          'controller_name' => 'GentleChefController',
          'portfolioType' => $em->getRepository(Portfolio::class)->findAll(),
          'members' => $em->getRepository(Member::class)->findAll()
      ]);
  }

  #[Route('/films', name: 'movies')]
  public function showMovies(Request $request,  EntityManagerInterface $em)
  {
      return $this->render('gentle_chef/movies.html.twig', [
          'controller_name' => 'GentleChefController',
          'projects' => $em->getRepository(Project::class)->findAll()
      ]);
  }

  #[Route('/film/{id}', name: 'movie')]
  public function showMovie(EntityManagerInterface $em, int $id)
  {
    return $this->render('gentle_chef/movie.html.twig',[
        'movie' => $em->getRepository(Project::class)->findById($id),
        'contributors' => $em->getRepository(MemberProject::class)->findByProjectId($id)
    ]);
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
    return $this->render('gentle_chef/news.html.twig',[
        'news' => $em->getRepository(NewActuality::class)->findAll()
    ]);
  }

  #[Route('/actualite/{id}', name: 'new')]
  public function showNew(EntityManagerInterface $em, int $id)
  {
    return $this->render('gentle_chef/new.html.twig', [
      'new' => $em->getRepository(NewActuality::class)->findById($id),
    ]);
  }

  #[Route('/soutenir', name: 'support')]
  public function showSupport(EntityManagerInterface $em)
  {
    return $this->render('gentle_chef/support.html.twig', [
      'members' => $em->getRepository(Member::class)->findMembersWithQuotes(3)
    ]);
  }

  #[Route('/contact', name: 'contact')]
  public function showContact(EntityManagerInterface $em)
  {
    return $this->render('gentle_chef/contact.html.twig');
  }

}
