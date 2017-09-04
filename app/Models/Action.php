<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Action
 *
 * @property int $id
 * @property int $turn
 * @property int $order
 * @property int $acting_character_instance_id
 * @property mixed $acting_character_location
 * @property mixed $acting_character_new_location
 * @property int $effected_character_instance_id
 * @property mixed $effected_character_location
 * @property mixed $effected_character_new_location
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int $action_type_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Action whereActingCharacterInstanceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Action whereActingCharacterLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Action whereActingCharacterNewLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Action whereActionTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Action whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Action whereEffectedCharacterInstanceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Action whereEffectedCharacterLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Action whereEffectedCharacterNewLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Action whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Action whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Action whereTurn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Action whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Action extends Model
{
    //
}
