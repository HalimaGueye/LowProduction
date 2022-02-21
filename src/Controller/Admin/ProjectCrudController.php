<?php

namespace App\Controller\Admin;

use App\Entity\Project;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProjectCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Project::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setDefaultSort(['createdAt' => 'DESC']);
    }


    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->add(Crud::PAGE_INDEX, Action::DETAIL)
            ->remove(Crud::PAGE_INDEX, Action::DELETE);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('name')
        ;
    }


    public function configureFields(string $pageName): iterable
    {
         return [
            TextField::new('name', 'Nom'),
            TextEditorField::new('description', 'Description'),
            TextEditorField::new('format', 'Format'),
            TextEditorField::new('duration', 'Durée'),
            TextEditorField::new('contributorsMessage', 'Message (contributeurs)'),
            TextEditorField::new('acvMessage', 'Message (ACV)'),
            TextEditorField::new('supportMessage', 'Message (soutient)'),
            DateTimeField::new('publication', 'Publication')->setFormat('Y-MM-dd HH:mm')->renderAsNativeWidget(),
            UrlField::new('urlCrowdfunding', 'URL Crowdfunding'),
            AssociationField::new('picture', 'Image liées'),
            AssociationField::new('state', 'État'),
            CollectionField::new('categories', 'Catégories'),
            CollectionField::new('articles', 'Articles liés'),
            CollectionField::new('partners', 'Partenaires associés')
        ];
    }
}
