<?php

namespace App\Tests;

use Generator;
use App\Entity\Teletubbies;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class TeletubbiesCheckerTest extends KernelTestCase
{
    /**
     * @dataProvider getData
    */
    public function getData(): ?Generator
    {
        yield [
        (new Teletubbies())
        ->setName("Nejma")
        ->setColor("blue")
        ->setGender("male")
        ->setAge("19")
        ->setShape("Square"),
        ];
        
    }


    /**
     * @dataProvider getData $teletubbies
    */
    # Tester si le name est vide
    public function testNotBlankName($teletubbies): void
    {
        $teletubbies->setName('');
        
        self::bootKernel();
        $container = static::getContainer();
        $errors = $container->get('validator')->validate($teletubbies);
        $this->assertCount(1, $errors);
    }

    /**
     * @dataProvider getData
    */
    # Tester si la couleur est supérieure à 10
    public function testLengthColor($teletubbies): void
    {
        $teletubbies->setColor('blueblueblue');

        self::bootKernel();
        $container = static::getContainer();
        $errors = $container->get('validator')->validate($teletubbies);
        $this->assertCount(1, $errors);
    }

    

}
