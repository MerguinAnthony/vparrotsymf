<?php

namespace App\DataFixtures;

use Faker\Factory;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use App\Entity\User;
use Faker\Generator;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{

    /**
     * @var Generator
     */
    private Generator $faker;



    public function __construct()
    {
        $this->faker = Factory::create('FR-fr');
    }
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('FR-fr');
        for ($i = 0; $i < 10; $i++) {
            $user = new User();
            $user->setEmail($this->faker->email())
                ->setLastname($this->faker->lastName())
                ->setFristname($this->faker->firstName())
                ->setFunction($this->faker->jobTitle())
                ->setRoles(['ROLE_USER'])
                ->setPlainPassword('password');
            $manager->persist($user);
        }
        $manager->flush();
    }
}
