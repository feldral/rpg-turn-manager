<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\EncounterType
 *
 * @property int $id
 * @property string $name
 * @property int $has_strict_turn_order
 * @property string $slug
 * @property string $description
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EncounterType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EncounterType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EncounterType whereHasStrictTurnOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EncounterType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EncounterType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EncounterType whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EncounterType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class EncounterType extends Model
{

    protected $fillable = [
        'name',
        'slug',
        'description',
        'has_strict_turn_order',
    ];
}
