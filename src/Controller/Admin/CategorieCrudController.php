<?php

namespace App\Controller\Admin;

use App\Entity\Categorie;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CategorieCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Categorie::class;
    }

    
    public function configureFields(string $pageName): iterable
    {

        $categorieRepository = $this->entityManager->getRepository(Categorie::class);

        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('libelle'),
            AssociationField::new('categorie', "Catégorie mère")/*->setQueryBuilder(
                $categorieRepository->createQueryBuilder('categorie')->
            )*/
        ];
    }
    
}
