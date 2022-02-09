<?php

namespace App\Controller\Admin;

use App\Entity\Picture;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use Vich\UploaderBundle\Form\Type\VichImageType;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class PictureCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Picture::class;
    }
    

    
    public function configureFields(string $pageName): iterable
    {
        return [

            TextField::new('name', 'Image name'),
            
            AssociationField::new('articles', 'Associated Article(s)'),
            AssociationField::new('projects', 'Associated Project(s)'),

            DateField::new('creation', 'Creation date')->setFormat('Y-MM-dd HH:mm')->renderAsNativeWidget(),


            ImageField::new('image', 'Image')
            ->setBasePath('uploads/images')
            ->setUploadDir('/public/uploads/images/')
            ->setUploadedFileNamePattern('[randomhash].[extension]')
            ->setRequired(true),

            

            
        ];
    }
    
}
