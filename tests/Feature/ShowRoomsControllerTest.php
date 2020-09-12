<?php

namespace Tests\Feature;

use Tests\TestCase;

class ShowRoomsControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/test');

        $response->assertStatus(200);
    }
}
