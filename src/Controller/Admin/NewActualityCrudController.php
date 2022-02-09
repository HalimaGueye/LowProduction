<?php

namespace App\Controller\Admin;

use App\Entity\NewActuality;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;


class NewActualityCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return NewActuality::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            AssociationField::new('actualityPicture', 'Actuality Picture'),
            AssociationField::new('project', 'Associated Project(s)'),
            DateField::new('publication', 'Publication date')->setFormat('Y-MM-dd HH:mm')->renderAsNativeWidget(),
            AssociationField::new('user', 'Written by'),

            TextEditorField::new('article'),


        ];
    }
    
}
