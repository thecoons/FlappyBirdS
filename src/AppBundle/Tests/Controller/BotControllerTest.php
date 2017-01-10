<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BotControllerTest extends WebTestCase
{
    public function testNewbot()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/newBot');
    }

    public function testGetbot()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/getBot');
    }

}
