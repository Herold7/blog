<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Post;
use DateTimeImmutable;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR'); // chargement de Faker en français
        for ($i=0; $i < 50; $i++) { // Boucle pour 50 articles
        $post = new Post();
        $post->setTitle($faker->sentence())
            ->setSlug($faker->slug())
            ->setContent($faker->paragraphs(5, true))
            ->setImage('https://via.placeholder.com/350x150')
            ->setCreatedAt(new DateTimeImmutable('1 month ago'))
            ->setUpdatedAt(new DateTimeImmutable('1week ago'))
            ;

        $manager->persist($post);

    };

        $manager->flush();
    }
}
