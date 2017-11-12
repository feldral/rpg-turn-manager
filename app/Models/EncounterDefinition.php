<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EncounterDefinition extends Model
{

    protected $fillable = [
        'character_id',
        'encounter_type_id',
    ];
}
