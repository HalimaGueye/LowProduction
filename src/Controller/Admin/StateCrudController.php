<?php

namespace App\Controller\Admin;

use App\Entity\State;
use EasyCorp\Bundle\EasyAdminBundle\Field\ColorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

class StateCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return State::class;
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
            ColorField::new('color', 'Couleur'),
        ];
    }

}
