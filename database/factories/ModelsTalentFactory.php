<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Talent::class, function (Faker $faker) {
    return [
        'talent_type_id' => factory(\App\Models\TalentType::class)->create(),
        'level' => $faker->numberBetween(1,100),
        'progression' => $faker->numberBetween(0,99),
        'last_level_up' => $faker->dateTime(),
    ];
});
