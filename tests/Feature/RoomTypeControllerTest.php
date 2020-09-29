<?php

namespace Tests\Feature;

use Tests\TestCase;

class RoomTypeControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/room_types');

        $response->assertStatus(200)
            ->assertSeeText('Name')
            ->assertViewIs('roomTypes.index');
    }
}
