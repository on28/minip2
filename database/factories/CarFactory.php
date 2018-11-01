<?php

use Faker\Generator as Faker;

$factory->define(\App\Car::class, function (Faker $faker) {
    return [
        'Make' => $faker -> randomElement(['Ford','Honda','Toyota']),
        'Model' => $faker -> randomElement(['Pickup', 'Hybrid', 'FourRunner', 'Electric' ]),
        'Year' => $faker -> randomElement(['2014', '2015', '2016', '2017', '2018', '2019']),

    ];
});
