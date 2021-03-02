<?php

namespace App\Controller\Admin;

use App\Entity\Competences;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CompetencesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Competences::class;
    }
    public function configureFields(string $pageName): iterable
    {
        return [
            IntegerField::new('niveau', "Pourcentage"),
            TextField::new('nom'),
        ];
    }
}
