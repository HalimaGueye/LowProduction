<?php

namespace App\Controller\Admin;

use App\Entity\Project;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
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
            TextField::new('format', 'Format'),
            TextField::new('duration', 'Durée'),
            TextEditorField::new('generalMessage', 'Message (général)'),
            TextEditorField::new('contributorsMessage', 'Message (contributeurs)'),
            TextEditorField::new('acvMessage', 'Message (ACV)'),
            TextEditorField::new('supportMessage', 'Message (soutient)'),
            BooleanField::new('showSupport', 'Affichage du bouton de donation HelloAsso'),
            DateField::new('publication', 'Publié le')->setFormat('Y-MM-dd')->renderAsNativeWidget(),
            UrlField::new('urlCrowdfunding', 'URL Crowdfunding'),
            AssociationField::new('picture', 'Image liée'),
            AssociationField::new('state', 'État'),
            AssociationField::new('categories', 'Catégories')->setFormTypeOption('by_reference', false),
            AssociationField::new('articles', 'Articles liés')->setFormTypeOption('by_reference', false),
            AssociationField::new('partners', 'Partenaires associés')->setFormTypeOption('by_reference', false)
        ];
    }
}
