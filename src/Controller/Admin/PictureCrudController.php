<?php

namespace App\Controller\Admin;

use App\Entity\Picture;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

class PictureCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Picture::class;
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

            TextField::new('name', 'Nom (ALT)'),
            ImageField::new('image', 'Image')
            ->setBasePath('uploads/images')
            ->setUploadDir('/public/uploads/images/')
            ->setUploadedFileNamePattern('[randomhash].[extension]')
            ->setRequired(true),
        ];
    }

}
