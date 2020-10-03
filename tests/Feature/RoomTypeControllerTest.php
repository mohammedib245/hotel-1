<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use Tests\TestCase;

class RoomTypeControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        Cache::shouldReceive('get')
            ->once()
            ->with('key')
            ->andReturn('value');
        $response = $this->get('/room_types');

        $response->assertStatus(200)
            ->assertSeeText('Name')
            ->assertViewIs('roomTypes.index');
    }
}
