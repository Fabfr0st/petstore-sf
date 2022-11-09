<?php

namespace App\Controller\Admin;

use App\Entity\Tva;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class TvaCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Tva::class;
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
