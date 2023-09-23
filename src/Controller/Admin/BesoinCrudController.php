<?php

namespace App\Controller\Admin;

use App\Entity\Besoin;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class BesoinCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Besoin::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
