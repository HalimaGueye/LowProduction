<?php

namespace App\Controller\Admin;

use App\Entity\PortfolioType;
use EasyCorp\Bundle\EasyAdminBundle\Field\ColorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

class PortfolioTypeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PortfolioType::class;
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
            TextField::new('icone', 'Icône Font Awesome'),
            ColorField::new('color', 'Couleur')
        ];
    }
}
