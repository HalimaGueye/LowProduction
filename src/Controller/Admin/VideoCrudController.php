<?php

namespace App\Controller\Admin;

use App\Entity\Video;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class VideoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Video::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('project', 'Projet associé'),
            TextField::new('name', 'Video Name'),
            UrlField::new('url', 'Video URL'),
            TextField::new('licence', 'Licence'),
        ];
    }
    
}
