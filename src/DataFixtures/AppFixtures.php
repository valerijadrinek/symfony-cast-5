<?php

namespace App\DataFixtures;

use App\Entity\Question;
use App\Factory\AnswerFactory;
use App\Factory\QuestionFactory;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
        QuestionFactory::createMany(10);

        AnswerFactory::createMany(100);

        $manager->flush();
    }
}
