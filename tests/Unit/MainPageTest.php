<?php


namespace Unit;

use Tests\TestCase;

class MainPageTest extends TestCase
{
    /** @test */
    public function mainPageTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
