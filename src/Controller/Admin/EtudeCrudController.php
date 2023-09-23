<?php

namespace App\Controller\Admin;

use App\Entity\Etude;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class EtudeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Etude::class;
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
