<?php

namespace App\Controller\Admin;

use App\Entity\Video;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextFieldEditor;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

class VideoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Video::class;
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
            AssociationField::new('project', 'Projet associé'),
            TextField::new('name', 'Titre'),
            TextField::new('iframe', 'Iframe'),
            TextFieldEditor::new('description', 'Description'),
            TextField::new('licence', 'Licence'),
        ];
    }

}
