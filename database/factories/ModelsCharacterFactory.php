<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Character::class, function (Faker $faker) {
    return [
        'name'     => $faker->firstName(),
        'owner_id' => factory(\App\User::class)->create()->id,
    ];
});
