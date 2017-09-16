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
 * @method static \Illuminate\Database\Eloquent\Builder whereComprehension($value)
 * @method static \Illuminate\Database\Eloquent\Builder whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder whereCreativity($value)
 * @method static \Illuminate\Database\Eloquent\Builder whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder whereDexterity($value)
 * @method static \Illuminate\Database\Eloquent\Builder whereDominance($value)
 * @method static \Illuminate\Database\Eloquent\Builder whereFocus($value)
 * @method static \Illuminate\Database\Eloquent\Builder whereFortitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder whereInfluence($value)
 * @method static \Illuminate\Database\Eloquent\Builder whereInsight($value)
 * @method static \Illuminate\Database\Eloquent\Builder whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Character extends Model
{

    protected $fillable = [
        'owner_id',
        'name',
    ];
}
