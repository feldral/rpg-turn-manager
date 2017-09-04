<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Character
 *
 * @property int $id
 * @property int $owner_id
 * @property string $name
 * @property int $strength
 * @property int $dexterity
 * @property int $intelligence
 * @property int $creativity
 * @property int $endurance
 * @property int $willpower
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Character whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Character whereCreativity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Character whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Character whereDexterity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Character whereEndurance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Character whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Character whereIntelligence($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Character whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Character whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Character whereStrength($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Character whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Character whereWillpower($value)
 * @mixin \Eloquent
 */
class Character extends Model
{
    //
}
