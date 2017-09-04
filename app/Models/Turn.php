<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Turn
 *
 * @property int $id
 * @property int $encounter_id
 * @property int $order
 * @property int $character_instance_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Turn whereCharacterInstanceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Turn whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Turn whereEncounterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Turn whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Turn whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Turn whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Turn extends Model
{
    //
}
