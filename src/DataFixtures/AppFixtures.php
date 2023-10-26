<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\User;
use Faker\Generator;
use DateTimeImmutable;
use App\Entity\VparAvis;
use App\Entity\VparHour;
use App\Entity\VparService;
use App\Entity\VparVehicle;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;


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
        $services1 = new VparService();
        $services1->setTitle('Mécanique')
            ->setText($this->faker->text(200))
            ->setImage('https://picsum.photos/200/300');
        $manager->persist($services1);

        $services2 = new VparService();
        $services2->setTitle('Carrosserie')
            ->setText($this->faker->text(200))
            ->setImage('https://picsum.photos/200/300');
        $manager->persist($services2);

        $services3 = new VparService();
        $services3->setTitle('entretients')
            ->setText($this->faker->text(200))
            ->setImage('https://picsum.photos/200/300');
        $manager->persist($services3);

        $user = new User();
        $user->setEmail('vincent@parrot.com')
            ->setLastname('Parrot')
            ->setFirstname('Vincent')
            ->setFunction('Gérant')
            ->setRoles(['ROLE_ADMIN'])
            ->setPlainPassword('password');
        $manager->persist($user);

        for ($i = 0; $i < 5; $i++) {
            $user = new User();
            $user->setEmail($this->faker->email())
                ->setLastname($this->faker->lastName())
                ->setFirstname($this->faker->firstName())
                ->setFunction($this->faker->jobTitle())
                ->setRoles(['ROLE_USER'])
                ->setPlainPassword('password');
            $manager->persist($user);
        }

        for ($a = 0; $a < 5; $a++) {
            $avis = new VparAvis();
            $avis->setDate(new DateTimeImmutable())
                ->setLastname($this->faker->lastName())
                ->setFirstname($this->faker->firstName())
                ->setRank($this->faker->numberBetween(0, 5))
                ->setMessage($this->faker->text(200))
                ->setApprove(false);

            $manager->persist($avis);
        }

        for ($h = 0; $h < 4; $h++) {
            $hours = new VparHour();
            $hours->setMonday($this->faker->numberBetween(0, 24))
                ->setTuesday($this->faker->numberBetween(0, 24))
                ->setWednesday($this->faker->numberBetween(0, 24))
                ->setThursday($this->faker->numberBetween(0, 24))
                ->setFriday($this->faker->numberBetween(0, 24))
                ->setSaturday($this->faker->numberBetween(0, 24))
                ->setSunday($this->faker->numberBetween(0, 24));

            $manager->persist($hours);
        }

        $manager->flush();
    }
}
