<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Articles extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i=1; $i <= 10 ; $i++) 
        { 
            $article = new Article();
            $article->setTitle("Titre de l'article n°$i")
                    ->setAbstract("<p>Lorem50</p>")
                    ->setUrlArticle("url@article")
                    ->setUrlDashboard("url@dashboard")

            ;
            
            $manager -> persist($article);
        }

        $manager->flush();
    }
}
