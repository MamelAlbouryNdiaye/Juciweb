<?php

namespace App\Controller\Admin;

use App\Entity\Audit;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class AuditCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Audit::class;
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
