<?php

namespace App\Controller\Admin;

use App\Entity\ArticleCategorie;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ArticleCategorieCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ArticleCategorie::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom'),
        ];
    }
}
