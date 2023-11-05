<?php

namespace App\DataFixtures;

use App\Entity\Question;
use App\Factory\AnswerFactory;
use App\Factory\HumaniodEntityFactory;
use App\Factory\QuestionFactory;
use App\Factory\TagFactory;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        HumaniodEntityFactory::createOne([
            'email' => 'abraca_admin@example.com',
            'roles' => ['ROLE_ADMIN']
        ]);
        HumaniodEntityFactory::createOne([
            'email' => 'abraca_user@example.com',
    
        ]);
        HumaniodEntityFactory::createMany(10);

        TagFactory::createMany(100);
        
        $questions = QuestionFactory::createMany(20, function() {
            return [     //if using only return without function it will generate one ransom tag and assign it to all questions
                'tags' => TagFactory::randomRange(0, 5),
                'owner' => HumaniodEntityFactory::random(),
            ];
        });

        AnswerFactory::createMany(100);

        AnswerFactory::new(function() use ($questions) {
            return [
                'question' => $questions[array_rand($questions)]
            ];
        })->needsApproval()->many(20)->create();

       

        $manager->flush();
    }
}
