<?php

use Faker\Generator as Faker;

$factory->define(App\Models\EncounterDefinition::class, function (Faker $faker) {
    return [
        'character_id'      => factory(\App\Models\Character::class)->create()->id,
        'encounter_type_id' => factory(\App\Models\EncounterType::class)->create()->id,
    ];
});
