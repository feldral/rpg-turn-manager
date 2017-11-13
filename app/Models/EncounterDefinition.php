<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\EncounterDefinition
 *
 * @property int $id
 * @property int $character_id
 * @property int $encounter_type_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EncounterDefinition whereCharacterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EncounterDefinition whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EncounterDefinition whereEncounterTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EncounterDefinition whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EncounterDefinition whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class EncounterDefinition extends Model
{

    protected $fillable = [
        'character_id',
        'encounter_type_id',
    ];
}
