<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CharacterInstance
 *
 * @property int $id
 * @property int $original_id
 * @property string $name
 * @property int $health
 * @property int $health_max
 * @property int $focus
 * @property int $focus_max
 * @property int $turn_order
 * @property int $strength
 * @property int $dexterity
 * @property int $intelligence
 * @property int $creativity
 * @property int $endurance
 * @property int $willpower
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharacterInstance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharacterInstance whereCreativity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharacterInstance whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharacterInstance whereDexterity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharacterInstance whereEndurance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharacterInstance whereFocus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharacterInstance whereFocusMax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharacterInstance whereHealth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharacterInstance whereHealthMax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharacterInstance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharacterInstance whereIntelligence($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharacterInstance whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharacterInstance whereOriginalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharacterInstance whereStrength($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharacterInstance whereTurnOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharacterInstance whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharacterInstance whereWillpower($value)
 * @mixin \Eloquent
 */
class CharacterInstance extends Model
{
    //
}
