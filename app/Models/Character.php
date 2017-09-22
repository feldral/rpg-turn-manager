<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Character
 *
 * @property int $id
 * @property int $owner_id
 * @property string $name
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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Character whereComprehension($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Character whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Character whereCreativity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Character whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Character whereDexterity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Character whereDominance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Character whereFocus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Character whereFortitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Character whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Character whereInfluence($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Character whereInsight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Character whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Character whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Character whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Character extends Model
{

    protected $fillable = [
        'owner_id',
        'name',
    ];
}
