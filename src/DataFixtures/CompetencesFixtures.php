<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Competences;

class CompetencesFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 1; $i <= 5; $i++){
            $comp = new Competences();
            $comp   ->setNom("Competence n°$i")
                    ->setNiveau(rand(0, 100));
            $manager->persist($comp);
        }

        $manager->flush();
    }
}
