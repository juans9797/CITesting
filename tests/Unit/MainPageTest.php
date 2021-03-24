<?php


namespace Unit;

use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;

class MainPageTest extends TestCase
{
    /** @test */
    public function mainPageTest()
    {
        $client = new Client();
        $response = $client->get('http://localhost:8000');
        $this->assertEquals(200,$response->getStatusCode());
    }
}
