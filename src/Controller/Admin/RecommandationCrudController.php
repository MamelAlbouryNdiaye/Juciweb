<?php

namespace App\Controller\Admin;

use App\Entity\Recommandation;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class RecommandationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Recommandation::class;
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
