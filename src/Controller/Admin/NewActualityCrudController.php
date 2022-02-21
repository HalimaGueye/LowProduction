<?php

namespace App\Controller\Admin;

use App\Entity\NewActuality;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;


class NewActualityCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return NewActuality::class;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('name')
            ->add('createdAt')
        ;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name', 'Titre'),
            TextEditorField::new('article', 'Contenu'),
            DateField::new('publication', 'Publication')->setFormat('Y-MM-dd')->renderAsNativeWidget(),
            AssociationField::new('user', 'Rédigé par'),
            AssociationField::new('picture', 'Illustration'),
            AssociationField::new('project', 'Projet associé')


        ];
    }

}
