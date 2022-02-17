<?php

namespace App\Controller\Admin;

use App\Entity\Supporters;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class SupportersCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Supporters::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            TextField::new('quote'),
            TextField::new('profession'),
            UrlField::new('url'),
            AssociationField::new('supporterPicture', 'Associated picture')
        ];
    }

}
