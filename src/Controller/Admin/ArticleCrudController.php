<?php

namespace App\Controller\Admin;

use App\Entity\Article;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;


class ArticleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Article::class;
    }


    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('title')
            ->add('createdAt')
        ;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title', 'Titre'),
            TextEditorField::new('abstract', 'Contenu'),
            UrlField::new('urlArticle', 'Lien du document'),
            UrlField::new('urlDashboard', 'Lien du tableau de bord'),
            AssociationField::new('picture', 'Illustration'),
            AssociationField::new('project', 'Projet associé'),
            AssociationField::new('writers', 'Contributeurs')->setFormTypeOption('by_reference', false)
        ];
    }

}
