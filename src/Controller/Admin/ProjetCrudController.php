<?php

namespace App\Controller\Admin;

use App\Entity\Projet;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ProjetCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Projet::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom'),
            TextField::new('description'),
            TextField::new('imageFile')->setFormType(VichFileType::class, [
                'delete_label' => 'supprimer?'
            ])->onlyOnForms(),
            ImageField::new('image')->setBasePath('%app.path.imageDir%')->onlyOnDetail(),
            ImageField::new('imageFile')->setFormType(VichImageType::class)
        ];
    }
}
