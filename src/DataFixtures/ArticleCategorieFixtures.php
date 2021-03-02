<?php

namespace App\DataFixtures;

use App\Entity\ArticleCategorie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ArticleCategorieFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $manager->flush();
    }
}
