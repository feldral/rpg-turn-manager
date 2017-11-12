<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Talent::class, function (Faker $faker) {
    return [
        'talent_type_id' => factory(\App\Models\TalentType::class)->create()->id,
        'character_id'   => factory(\App\Models\Character::class)->create()->id,
        'level'          => 1,
        'progression'    => 0,
        'last_level_up'  => $faker->dateTime(),
    ];
});
