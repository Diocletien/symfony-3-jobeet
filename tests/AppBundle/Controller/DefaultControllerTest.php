<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
	/**
	 * Test fonctionnel du controleur Default et de l'action index
	 */
    public function testIndex()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        // 2 asserts
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Welcome to Symfony', $crawler->filter('#container h2')->text());
    }
}
