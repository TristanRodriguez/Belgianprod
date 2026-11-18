<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $data = [
            [
                "title" => "Blade Runner",
                "description" => "Un chasseur de replican...",
            ],
            [
                "title" => "Blow",
                "description" => "Un trafiquant de drogue...",
            ],
            [
                "title" => "Saw",
                "description" => "Un tueur psychotique...",
            ],
            [
                "title" => "Shaft",
                "description" => "Un gangster...",
            ],
        ];

        foreach($data as $row) {
            $movie = new Movie();
            $movie->setTitle($row["title"]);
            $movie->setDescription($row["description"]);

            $manager->persist($movie);
        }

        $manager->flush();
    }
}
