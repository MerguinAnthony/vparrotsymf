<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\User;
use Faker\Generator;
use DateTimeImmutable;
use App\Entity\Contact;
use App\Entity\VparAvis;
use App\Entity\VparHour;
use App\Entity\VparService;
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
            ->setImage('muscular-car-service-worker-repairing-vehicle-65352f0b4570b706327916.jpg');
        $manager->persist($services1);

        $services2 = new VparService();
        $services2->setTitle('Carrosserie')
            ->setText($this->faker->text(200))
            ->setImage('car-wash-detailing-station-65352f137a251816788387.jpg');
        $manager->persist($services2);

        $services3 = new VparService();
        $services3->setTitle('entretients')
            ->setText($this->faker->text(200))
            ->setImage('man-polishing-car-inside-car-service-65352f1c378ef318462760.jpg');
        $manager->persist($services3);

        $user = new User();
        $user->setEmail('vparrot@amtest.xyz')
            ->setLastname('Parrot')
            ->setFirstname('Vincent')
            ->setFunction('Gérant')
            ->setRoles(['ROLE_ADMIN'])
            ->setPlainPassword('@Vparrot7');
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

        for ($a = 0; $a < 10; $a++) {
            $avis = new VparAvis();
            $avis->setDate(new DateTimeImmutable())
                ->setLastname($this->faker->lastName())
                ->setFirstname($this->faker->firstName())
                ->setRank($this->faker->numberBetween(0, 5))
                ->setMessage($this->faker->text(200))
                ->setApprove(false);

            $manager->persist($avis);
        }

        for ($h = 0; $h < 7; $h++) {
            $hours = new VparHour();
            $hours->setDays($this->faker->dayOfWeek())
                ->setHours(8 . 'h' . '-' . 12 . 'h' . ' / ' . 14 . 'h' . '-' . 18 . 'h');

            $manager->persist($hours);
        }

        for ($c = 0; $c < 5; $c++) {
            $contact = new Contact();
            $contact->setFirstname($this->faker->firstName())
                ->setLastname($this->faker->lastName())
                ->setPhone('0612345678')
                ->setEmail($this->faker->email())
                ->setSubject($this->faker->text(50))
                ->setMessage($this->faker->text(200));

            $manager->persist($contact);
        }

        $manager->flush();
    }
}
