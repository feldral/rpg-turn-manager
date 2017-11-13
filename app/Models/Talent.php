<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Talent
 *
 * @property int $id
 * @property int $talent_type_id
 * @property int $character_id
 * @property int $level
 * @property int $progression
 * @property string $last_level_up
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Talent whereCharacterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Talent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Talent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Talent whereLastLevelUp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Talent whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Talent whereProgression($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Talent whereTalentTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Talent whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Talent extends Model
{

    protected $fillable = [
        'talent_type_id',
        'level',
        'progression',
        'last_level_up',
    ];
}
