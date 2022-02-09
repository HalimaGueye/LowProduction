<?php

namespace App\Controller\Admin;

use App\Entity\PortfolioType;
use EasyCorp\Bundle\EasyAdminBundle\Field\ColorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PortfolioTypeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PortfolioType::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name', 'Type Name'),
            ColorField::new('color', 'Color'),
            ImageField::new('icone', 'Portfolio Type icon')
            ->setBasePath('uploads/images/icones')
            ->setUploadDir('/public/uploads/images/icones')
            ->setUploadedFileNamePattern('[randomhash].[extension]')
            ->setRequired(true),
            
        ];
    }
    
}
