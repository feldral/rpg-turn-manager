<?php

use Faker\Generator as Faker;

$factory->define(App\Models\EncounterType::class, function (Faker $faker) {
    return [
        'name'                  => $faker->words($faker->numberBetween(2, 4)),
        'has_strict_turn_order' => $faker->boolean(),
        'slug'                  => str_replace(' ', '-', $faker->words()),
        'description'           => $faker->sentences(3),
    ];
});
