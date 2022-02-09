<?php

namespace App\Controller\Admin;

use App\Entity\Article;
use App\Entity\Category;
use App\Entity\User;
use App\Entity\NewActuality;
use App\Entity\Partner;
use App\Entity\Portfolio;
use App\Entity\PortfolioType;
use App\Entity\Project;
use App\Entity\Video;
use App\Entity\Member;
use App\Entity\Picture;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use SymfonyComponentFormExtensionCoreTypeRepeatedType;

class DashboardController extends AbstractDashboardController
{
    public function __construct(
        private AdminUrlGenerator $adminUrlGenerator
    ) {
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
        yield MenuItem::section('Main');

        // yield MenuItem::subMenu('Articles', 'fas fa-bars')->setSubItems([
        //     MenuItem::linkToCrud('Create article', 'fas fa-plus', Article::class)->setAction(Crud::PAGE_NEW),
        //     MenuItem::linkToCrud('Show article', 'fas fa-eye', Article::class)
        // ]);

        // yield MenuItem::subMenu('Projects', 'fas fa-bars')->setSubItems([
        //     MenuItem::linkToCrud('Create project', 'fas fa-plus', Project::class)->setAction(Crud::PAGE_NEW),
        //     MenuItem::linkToCrud('Show project', 'fas fa-eye', Project::class)
        // ]);

        // yield MenuItem::subMenu('Users', 'fas fa-bars')->setSubItems([
        //     MenuItem::linkToCrud('Create user', 'fas fa-plus', User::class)->setAction(Crud::PAGE_NEW),
        //     MenuItem::linkToCrud('Show user', 'fas fa-eye', User::class)
        // ]);

        // yield MenuItem::subMenu('Actuality', 'fas fa-bars')->setSubItems([
        //     MenuItem::linkToCrud('Create actuality', 'fas fa-plus', NewActuality::class)->setAction(Crud::PAGE_NEW),
        //     MenuItem::linkToCrud('Show actuality', 'fas fa-eye', NewActuality::class)
        // ]);

        // yield MenuItem::subMenu('Category', 'fas fa-bars')->setSubItems([
        //     MenuItem::linkToCrud('Create category', 'fas fa-plus', Category::class)->setAction(Crud::PAGE_NEW),
        //     MenuItem::linkToCrud('Show category', 'fas fa-eye', Category::class)
        // ]);

        // yield MenuItem::subMenu('Partner', 'fas fa-bars')->setSubItems([
        //     MenuItem::linkToCrud('Create partner', 'fas fa-plus', Partner::class)->setAction(Crud::PAGE_NEW),
        //     MenuItem::linkToCrud('Show partner', 'fas fa-eye', Partner::class)
        // ]);

        // yield MenuItem::subMenu('Portfolio', 'fas fa-bars')->setSubItems([
        //     MenuItem::linkToCrud('Create Portfolio', 'fas fa-plus', Portfolio::class)->setAction(Crud::PAGE_NEW),
        //     MenuItem::linkToCrud('Show Portfolio', 'fas fa-eye',Portfolio::class)
        // ]);

        // yield MenuItem::subMenu('Member', 'fas fa-bars')->setSubItems([
        //     MenuItem::linkToCrud('Create Member', 'fas fa-plus', Member::class)->setAction(Crud::PAGE_NEW),
        //     MenuItem::linkToCrud('Show Member', 'fas fa-eye',Member::class)
        // ]);


        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Project', 'far fa-folder', Project::class);
        yield MenuItem::linkToCrud('Article', 'fa fa-file-text-o', Article::class);
        yield MenuItem::linkToCrud('Category', 'fas fa-grip-vertical', Category::class);
        


        yield MenuItem::section('Medias');
        yield MenuItem::linkToCrud('Video', 'fas fa-video', Video::class);
        yield MenuItem::linkToCrud('Picture', 'fas fa-images', Picture::class);

        yield MenuItem::section('Actuality');
        yield MenuItem::linkToCrud('New Actuality', 'fas fa-newspaper', NewActuality::class);

        yield MenuItem::section('Administration');
        yield MenuItem::linkToCrud('User', 'fa fa-users', User::class);
        yield MenuItem::linkToCrud('Member', 'far fa-smile', Member::class);
        yield MenuItem::linkToCrud('Partner', 'fa fa-hands-helping', Partner::class);
    
        yield MenuItem::section('Portfolio');
        yield MenuItem::linkToCrud('Portfolio', 'fas fa-id-card-alt', Portfolio::class);
        yield MenuItem::linkToCrud('Portfolio Type', 'fas fa-grip-horizontal', PortfolioType::class);

    }


    
}
