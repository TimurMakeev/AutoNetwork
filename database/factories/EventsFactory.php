<?php

use Faker\Generator as Faker;

$factory->define(App\Event::class, function (Faker $faker) {
    return [
        'lng' => $faker->latitude(),
        'lat' => $faker->longitude
    ];
});
