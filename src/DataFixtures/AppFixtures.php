<?php

namespace App\DataFixtures;

use App\Entity\Document;
use App\Entity\Etude;
use App\Entity\Materiel;
use App\Entity\Recommandation;
use App\Entity\Structure;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Factory\AuditFactory;
use App\Factory\BesoinFactory;
use App\Factory\DocumentFactory;
use App\Factory\EtudeFactory;
use App\Factory\MaterielFactory;
use App\Factory\RecommandationFactory;
use App\Factory\StructureFactory;
use App\Factory\UserFactory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        AuditFactory::createMany(10);
        BesoinFactory::createMany(10);
        DocumentFactory::createMany(10);
        EtudeFactory::createMany(10);
        RecommandationFactory::createMany(10);
        StructureFactory::createMany(10);
        UserFactory::createMany(1);
        MaterielFactory::createMany(10);


        $manager->flush();
    }
}
