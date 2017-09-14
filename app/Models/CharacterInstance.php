<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CharacterInstance
 *
 * @property int $id
 * @property int $original_id
 * @property string $name
 * @property int $turn_order
 * @property int $dominance
 * @property int $dexterity
 * @property int $comprehension
 * @property int $creativity
 * @property int $influence
 * @property int $insight
 * @property int $fortitude
 * @property int $focus
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharacterInstance whereComprehension($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharacterInstance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharacterInstance whereCreativity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharacterInstance whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharacterInstance whereDexterity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharacterInstance whereDominance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharacterInstance whereFocus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharacterInstance whereFortitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharacterInstance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharacterInstance whereInfluence($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharacterInstance whereInsight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharacterInstance whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharacterInstance whereOriginalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharacterInstance whereTurnOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharacterInstance whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CharacterInstance extends Model
{
    //
}
