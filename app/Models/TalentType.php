<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\TalentType
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TalentType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TalentType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TalentType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TalentType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TalentType whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TalentType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TalentType extends Model
{

    protected $fillable = [
        'name',
        'slug',
        'description',
    ];
}
