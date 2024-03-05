<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ArticleControllerTest extends WebTestCase
{
    public function testRoute(): void
    {
        $client = static::createClient();
        $client->request('GET', '/article/');
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Articles');
    }
}
