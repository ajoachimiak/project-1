<?php

namespace App\DataFixtures;

use App\Entity\ExportMade;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ExportMadeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 10; $i++) {
            $exportMade = new ExportMade();
            $exportMade->setName('Test' . $i);
            $exportMade->setCreationDate('2022-02-'.(10 + $i).' '.rand(10, 20).':'.rand(15, 35).':00');
            $exportMade->setUserName('User');
            $exportMade->setPlace('Lokal' . $i);

            $manager->persist($exportMade);
        }
        $manager->flush();
    }
}
