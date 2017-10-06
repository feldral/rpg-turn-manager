<?php

use Faker\Generator as Faker;

$factory->define(App\Models\TalentType::class, function (Faker $faker) {
    return [
        'name'                  => implode(' ', $faker->words($faker->numberBetween(2, 4))),
        'slug'                  => $faker->slug(),
        'description'           => implode(' ', $faker->sentences(3)),
    ];
});
