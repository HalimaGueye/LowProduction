<?php

namespace App\Controller\Admin;

use App\Entity\Article;
use App\Entity\Category;
use App\Entity\User;
use App\Entity\NewActuality;
use App\Entity\Partner;
use App\Entity\Supporters;
use App\Entity\Comic;
use App\Entity\Portfolio;
use App\Entity\PortfolioType;
use App\Entity\Project;
use App\Entity\Video;
use App\Entity\Member;
use App\Entity\MemberType;
use App\Entity\Picture;
use App\Entity\RoleProject;
use App\Entity\MemberProject;
use App\Entity\State;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    public function __construct(private AdminUrlGenerator $adminUrlGenerator){

    }

    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        $url = $this->adminUrlGenerator
            ->setController(ArticleCrudController::class)
            ->generateUrl();

        return $this->redirect($url);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Low Production');
    }

    public function configureCrud(): Crud
    {
        return Crud::new()
            ->setDateTimeFormat('medium', 'short');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::section('Films');
        yield MenuItem::linkToCrud('Projets', 'far fa-folder', Project::class);
        yield MenuItem::linkToCrud('Catégories', 'fas fa-grip-vertical', Category::class);
        yield MenuItem::linkToCrud('État', 'fas fa-grip-vertical', State::class);
        yield MenuItem::linkToCrud('Rôles', 'fa fa-users', RoleProject::class);
        yield MenuItem::linkToCrud('Participations', 'fa fa-users', MemberProject::class);

        yield MenuItem::section('Articles');
        yield MenuItem::linkToCrud('Actualités', 'fas fa-newspaper', NewActuality::class);
        yield MenuItem::linkToCrud('Études', 'fa fa-file-text-o', Article::class);
        yield MenuItem::linkToCrud('BD', 'fa fa-file-text-o', Comic::class);

        yield MenuItem::section('Membres et portfolios');
        yield MenuItem::linkToCrud('Membres', 'far fa-smile', Member::class);
        yield MenuItem::linkToCrud('Types', 'far fa-smile', MemberType::class);
        yield MenuItem::linkToCrud('Portfolios', 'fas fa-id-card-alt', Portfolio::class);
        yield MenuItem::linkToCrud('Types', 'fas fa-id-card-alt', PortfolioType::class);

        yield MenuItem::section('Médias');
        yield MenuItem::linkToCrud('Images', 'fas fa-images', Picture::class);
        yield MenuItem::linkToCrud('Vidéos', 'fas fa-video', Video::class);

        //Ne laisser cette partie qu'aux administrateurs
        yield MenuItem::section('Administration');
        yield MenuItem::linkToCrud('Utilisateurs', 'fa fa-users', User::class);
        yield MenuItem::linkToCrud('Partenaires', 'fa fa-hands-helping', Partner::class);
        yield MenuItem::linkToCrud('Soutiens', 'fa fa-star', Supporters::class);
    }
}
