<?php

namespace App\Controller\Admin;

use App\Entity\MemberProject;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

class MemberProjectCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return MemberProject::class;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('project')
            ->add('createdAt')
        ;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('member'),
            AssociationField::new('project'),
            AssociationField::new('roleProject')
        ];
    }

}
