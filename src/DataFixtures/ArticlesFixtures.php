<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\ArticleCategorie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ArticlesFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 1; $i <= 3; $i++){
            $categ = new ArticleCategorie();
            $categ->setNom("Categorie n°$i");
            $manager->persist($categ);
        }

        for($i = 1; $i <= 10; $i++){
            $article = new Article();
            $article->setNom("Article n°$i")
                    ->setLien("Lien de l'article n°$i")
                    ->setImage("https://placehold.it/350x150")
                    ->setCategorie($categ);
            $manager->persist($article);
        }

        $manager->flush();
    }
}
