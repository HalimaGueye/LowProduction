<?php

namespace App\Controller\Admin;

use App\Entity\Portfolio;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

class PortfolioCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Portfolio::class;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('url')
            ->add('createdAt')
        ;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            UrlField::new('url', 'URL Portfolio'),
            AssociationField::new('portfolioType','Type'),
            AssociationField::new('member','Membre')
        ];
    }

}
