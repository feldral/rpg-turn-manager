<?php

use Faker\Generator as Faker;

$factory->define(App\Models\EncounterType::class, function (Faker $faker) {
    return [
        'name'                  => implode(' ', $faker->words($faker->numberBetween(2, 4))),
        'has_strict_turn_order' => $faker->numberBetween(0,1),
        'slug'                  => $faker->slug(),
        'description'           => implode(' ', $faker->sentences(3)),
    ];
});
