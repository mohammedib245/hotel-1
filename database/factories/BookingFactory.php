<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Booking;
use Faker\Generator as Faker;

$factory->define(Booking::class, function (Faker $faker) {
    return [
        'room_id' => $faker->randomDigitNot(0),
        'start' => $faker->date('Y-m-d'),
        'end' => $faker->date('Y-m-d'),
        'is_reservation' => $faker->boolean(),
        'is_paid' => $faker->boolean(),
        'notes' => $faker->text(),
    ];
});
