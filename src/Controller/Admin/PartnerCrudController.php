<?php

namespace App\Controller\Admin;

use App\Entity\Partner;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class PartnerCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Partner::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            UrlField::new('url'),
            AssociationField::new('picture', 'Associated picture')
            // ImageField::new('picture', 'Partner icon')
            // ->setBasePath('uploads/images/partner')
            // ->setUploadDir('/public/uploads/images/partner')
            // ->setUploadedFileNamePattern('[randomhash].[extension]')
            // ->setRequired(true),
        ];
    }
    
}
