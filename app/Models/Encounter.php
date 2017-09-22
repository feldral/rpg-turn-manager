<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Encounter
 *
 * @property int $id
 * @property int|null $host_id
 * @property int|null $parent_id
 * @property int $is_public
 * @property string $name
 * @property string $description
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property int $encounter_type_id
 * @property int $encounter_location_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Encounter whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Encounter whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Encounter whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Encounter whereEncounterLocationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Encounter whereEncounterTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Encounter whereHostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Encounter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Encounter whereIsPublic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Encounter whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Encounter whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Encounter whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Encounter extends Model
{
    //
}
