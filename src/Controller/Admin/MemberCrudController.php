<?php

namespace App\Controller\Admin;

use App\Entity\Member;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

class MemberCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Member::class;
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
            TextField::new('name', 'Prénom Nom'),
            TextEditorField::new('description', 'Compétence/métier (fonction)'),
            TextEditorField::new('quote', 'Citation'),
            AssociationField::new('memberType', 'Type de membre'),
            AssociationField::new('picture', 'Image')
        ];
    }

}
