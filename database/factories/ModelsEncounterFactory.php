<?php

use App\Models\EncounterType;
use Faker\Generator as Faker;

$factory->define(App\Models\Encounter::class, function (Faker $faker) {
    return [
        'is_public'             => $faker->numberBetween(0,1),
        'encounter_type_id'     => factory(EncounterType::class)->create()->id,
    ];
});
