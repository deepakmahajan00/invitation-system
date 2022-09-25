<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
      for ($i = 1; $i <= 10; $i++) {
        $user = new User();
        $user->setName('test-user-'.$i);
        $user->setEmail('test-user-'.$i.'@test.com');
        $user->setCreated(new \DateTime());
        $manager->persist($user);
      }

      $manager->flush();
    }
}
