<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\TalentInstance
 *
 * @property int $id
 * @property int $character_instance_id
 * @property int $talent_type_id
 * @property int $level
 * @property int $use_count
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TalentInstance whereCharacterInstanceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TalentInstance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TalentInstance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TalentInstance whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TalentInstance whereTalentTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TalentInstance whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TalentInstance whereUseCount($value)
 * @mixin \Eloquent
 */
class TalentInstance extends Model
{

    protected $fillable = [
        'character_instance_id',
        'talent_type_id',
        'level',
        'use_count',
    ];
}
