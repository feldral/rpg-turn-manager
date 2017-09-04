<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ActionType
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ActionType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ActionType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ActionType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ActionType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ActionType whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ActionType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ActionType extends Model
{
    //
}
