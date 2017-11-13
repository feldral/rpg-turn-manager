<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Character::class, function (Faker $faker) {
    return [
        'name'          => $faker->firstName(),
        'owner_id'      => factory(\App\User::class)->create()->id,
        'dominance'     => 1,
        'dexterity'     => 1,
        'comprehension' => 1,
        'creativity'    => 1,
        'influence'     => 1,
        'insight'       => 1,
        'fortitude'     => 1,
        'focus'         => 1,
    ];
});
