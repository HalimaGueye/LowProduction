<?php

namespace App\Controller\Admin;

use App\Entity\Portfolio;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class PortfolioCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Portfolio::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            UrlField::new('url'),
            AssociationField::new('member','Associated Member'),
            AssociationField::new('portfolioType','Associated Type Portfolio'),
        ];
    }
    
}
