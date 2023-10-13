<?php

namespace App\DataFixtures;

use Faker\Factory;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use App\Entity\User;
use App\Entity\VparService;
use App\Entity\VparVehicle;
use Faker\Generator;


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

        $services1 = new VparService();
        $services1->setTitle('Mécanique')
            ->setText($this->faker->text(200));
        $manager->persist($services1);

        $services2 = new VparService();
        $services2->setTitle('Carrosserie')
            ->setText($this->faker->text(200));
        $manager->persist($services2);

        $services3 = new VparService();
        $services3->setTitle('entretients')
            ->setText($this->faker->text(200));
        $manager->persist($services3);

        for ($i = 0; $i < 30; $i++) {

            $user = new User();
            $user->setEmail('vincent.parrot@vparrot.com')
                ->setLastname('Parrot')
                ->setFirstname('Vincent')
                ->setFunction('Gérant')
                ->setRoles(['ROLE_ADMIN'])
                ->setPlainPassword('password');
            $manager->persist($user);

            for ($i = 0; $i < 30; $i++) {
                $user = new User();
                $user->setEmail($this->faker->email())
                    ->setLastname($this->faker->lastName())
                    ->setFirstname($this->faker->firstName())
                    ->setFunction($this->faker->jobTitle())
                    ->setRoles(['ROLE_USER'])
                    ->setPlainPassword('password');
                $manager->persist($user);
            }

            $manager->flush();
        }
    }
}
