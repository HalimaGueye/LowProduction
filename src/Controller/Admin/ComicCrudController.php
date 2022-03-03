<?php

namespace App\Controller\Admin;

use App\Entity\Comic;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

class ComicCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Comic::class;
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
            UrlField::new('url', 'Lien'),
            DateField::new('publication', 'Publication')->setFormat('Y-MM-dd')->renderAsNativeWidget(),
            AssociationField::new('picture', 'Illustration'),
            AssociationField::new('writers', 'Contributeurs')->setFormTypeOption('by_reference', false)
        ];
    }

}
