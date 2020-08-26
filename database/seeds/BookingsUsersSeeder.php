<?php

use App\Booking;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingsUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookings_users')->insert([
            'booking_id' => Booking::pluck('id')->random(),
            'user_id' => 14,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('bookings_users')->insert([
            'booking_id' => Booking::pluck('id')->random(),
            'user_id' => 14,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('bookings_users')->insert([
            'booking_id' => Booking::pluck('id')->random(),
            'user_id' => 14,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('bookings_users')->insert([
            'booking_id' => Booking::pluck('id')->random(),
            'user_id' => 14,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('bookings_users')->insert([
            'booking_id' => Booking::pluck('id')->random(),
            'user_id' => 14,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('bookings_users')->insert([
            'booking_id' => Booking::pluck('id')->random(),
            'user_id' => 14,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
