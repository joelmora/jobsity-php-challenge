<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HiddenTweetControllerTest extends WebTestCase
{
    public function testHidetweet()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/hideTweet');
    }

    public function testUnhidetweet()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/unhideTweet');
    }

}
