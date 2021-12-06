<?php

namespace App\DataFixtures;

use App\Entity\Task;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 100; $i++) {
            $task = new Task();
            $task->setName("Task ".$i);
            $task->setDescription("Lorem ipsum dolor sit amet consectitur adispicing elit...");
            $task->setDone(array_rand([true, false]));
            $manager->persist($task);
        }
        $manager->flush();
    }
}
