<?php

namespace App\Controller\Admin;

use App\Entity\Profil;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ProfilCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Profil::class;
    }
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom'),
            TextField::new('prenom'),
            TextField::new('situation'),
            TextField::new('fonction'),
            TextField::new('lieu'),
            TextEditorField::new('presentation'),
            TextareaField::new('imageFile')->setFormType(VichImageType::class)->onlyOnForms(),
            ImageField::new('photo')->setBasePath('%app.path.imageDir%')->onlyOnIndex(),
            TextareaField::new('cvFile')->setFormType(VichImageType::class)->onlyOnForms(),
            ImageField::new('cv')->setBasePath('%app.path.imageDir%')->onlyOnIndex()
        ];
    }
}
