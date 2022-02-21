<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
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
            AssociationField::new('member', 'Membre'),
            TextField::new('role', 'Rôle'),
            TextField::new('pseudo', 'Pseudo'),
            TextField::new('password', 'Mot de passe'),
        ];
    }
}
