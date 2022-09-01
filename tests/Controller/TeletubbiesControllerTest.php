<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TeletubbiesControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();
        $client->request('GET', '/fr/tous-les-teletubbies');
        self::bootKernel();
        $this->assertResponseIsSuccessful();
        
    }
}