<?php

use App\Booking;
use App\User;
use BookingsUsersSeeder;
use HotelSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BookingsUsersSeeder::class);
        $this->call(HotelSeeder::class);
        factory(User::class, 3)->create();
        factory(Booking::class, 10)->create();
    }
}
