<?php

namespace App\Controller\Admin;

use App\Entity\Project;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProjectCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Project::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setDefaultSort(['createdAt' => 'DESC']);
    }


    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('name')
        ;
    }


    public function configureFields(string $pageName): iterable
    {
      return [
        // généralités
        TextField::new('name', 'Nom'),
        TextEditorField::new('description', 'Description (courte)'),
        TextField::new('format', 'Format'),
        TextField::new('duration', 'Durée'),
        DateField::new('publication', 'Publié le')->setFormat('Y-MM-dd')->renderAsNativeWidget(),
        TextEditorField::new('generalMessage', 'Texte (GÉNÉRAL)'),
        // éducation
        TextEditorField::new('educationMessage', 'Texte (MALETTE PÉDAGOGIQUE)'),
        BooleanField::new('showEducationSection', 'Affichage de la section MALETTE PÉDAGOGIQUE ?'),
        // contributions et informations
        TextEditorField::new('contributorsMessage', 'Texte (INFORMATIONS)'),
        BooleanField::new('showContributorsSection', 'Affichage de la section INFORMATIONS ?'),
        // acv
        TextEditorField::new('acvMessage', 'Texte (ÉTUDES ENVIRONNEMENTALES)'),
        BooleanField::new('showAcvSection', 'Affichage de la section ÉTUDES ENVIRONNEMENTALES ?'),
        // soutient
        TextEditorField::new('supportMessage', 'Texte (SOUTENIR)'),
        BooleanField::new('showSupportSection', 'Affichage de la section SOUTENIR ?'),
        BooleanField::new('showSupport', 'Affichage du bouton/lien de donation HELLOASSO ?'),
        UrlField::new('urlCrowdfunding', 'URL Crowdfunding'),
        // associations bdd
        AssociationField::new('picture', 'Image liée'),
        AssociationField::new('state', 'État'),
        AssociationField::new('categories', 'Catégories')->setFormTypeOption('by_reference', false),
        AssociationField::new('articles', 'Articles liés')->setFormTypeOption('by_reference', false),
        AssociationField::new('partners', 'Partenaires associés')->setFormTypeOption('by_reference', false)
      ];
    }
}
