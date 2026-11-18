<?php

namespace App\DataFixtures;

use App\Entity\Actor;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ActorFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $data = [
            [
                "name" => "Gérard",
                "lastname" => "Butler",
                "birthday" => "18/11/2020",
                "gender" => "M",
            ],
            [
                "name" => "Gérard",
                "lastname" => "Butler",
                "birthday" => "18/11/2020",
                "gender" => "M",
            ],
            [
                "name" => "Gérard",
                "lastname" => "Butler",
                "birthday" => "18/11/2020",
                "gender" => "M",
            ],
        ];

        foreach($data as $row) {


            $actor = new Actor();

            $birthday = DateTime::createFromFormat('d/m/Y', $row['birthday']);

            $actor->setName($row["name"]);
            $actor->setLastname($row["lastname"]);
            $actor->setBirthday($birthday);
            $actor->setGender($row["gender"]);

            $manager->persist($actor);
        }

        $manager->flush();
    }
}
