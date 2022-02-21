<?php

namespace App\Controller\Admin;

use App\Entity\Supporters;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

class SupportersCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Supporters::class;
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
            TextField::new('name', 'Nom'),
            TextEditorField::new('quote', 'Citation'),
            TextEditorField::new('profession', 'Profession'),
            UrlField::new('url', 'Site internet'),
            AssociationField::new('picture', 'Image')
        ];
    }

}
