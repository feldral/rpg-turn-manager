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
 * @property int $encounter_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharacterInstance whereComprehension($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharacterInstance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharacterInstance whereCreativity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharacterInstance whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharacterInstance whereDexterity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharacterInstance whereDominance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharacterInstance whereEncounterId($value)
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

    /**
     * @param \App\Models\Character $character
     * @param \App\Models\Encounter $encounter
     *
     * @return \App\Models\CharacterInstance
     */
    public static function createFrom(Character $character, Encounter $encounter)
    {
        $characterInstance = new CharacterInstance();

        $characterInstance->original_id = $character->id;
        $characterInstance->encounter_id = $encounter->id;
        $characterInstance->dominance = $character->dominance;
        $characterInstance->dexterity = $character->dexterity;
        $characterInstance->comprehension = $character->comprehension;
        $characterInstance->creativity = $character->creativity;
        $characterInstance->influence = $character->influence;
        $characterInstance->insight = $character->insight;
        $characterInstance->fortitude = $character->fortitude;
        $characterInstance->focus = $character->focus;

        $characterInstance->save();

        //todo copy all of the character's talents

        return $characterInstance;
    }
}
