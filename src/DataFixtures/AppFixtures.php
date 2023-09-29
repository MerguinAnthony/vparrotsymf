<?php

namespace App\DataFixtures;

use App\Entity\VparService;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Faker\Generator;

class AppFixtures extends Fixture
{
    /**
     * @var Generator
     */
    private Generator $faker;

    public function __construct()
    {
        $this->faker = Factory::create('fr_FR');
    }

    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i < 4; $i++) {
            $sevice = new VparService();
            $sevice->setTitle('Service ' . $i)
                ->setText($this->faker->paragraph())
                // Image insertion format blob
                ->setImg(
                    file_get_contents(
                        'https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png'
                    )
                );
            $manager->persist($sevice);
        }

        $manager->flush();
    }
}
