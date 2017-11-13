<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CharacterInstance
 *
 * @property int $id
 * @property int $original_id
 * @property int $turn_order
 * @property int $dominance
 * @property int $dexterity
 * @property int $comprehension
 * @property int $creativity
 * @property int $influence
 * @property int $insight
 * @property int $fortitude
 * @property int $focus
 * @property Collection|TalentInstance[] $talents
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

    protected $fillable = [
        'original_id',
        'encounter_id',
        'original_id',
        'encounter_id',
        'dominance',
        'dexterity',
        'comprehension',
        'creativity',
        'influence',
        'insight',
        'fortitude',
        'focus',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function talents(){
        return $this->hasMany(TalentInstance::class);
    }

    /**
     * @param \App\Models\Character $character
     * @param \App\Models\Encounter $encounter
     *
     * @return \App\Models\CharacterInstance
     */
    public static function createFrom(Character $character, Encounter $encounter)
    {
        $characterInstance = new CharacterInstance();

        $characterInstance->original_id   = $character->id;
        $characterInstance->encounter_id  = $encounter->id;
        $characterInstance->dominance     = $character->dominance;
        $characterInstance->dexterity     = $character->dexterity;
        $characterInstance->comprehension = $character->comprehension;
        $characterInstance->creativity    = $character->creativity;
        $characterInstance->influence     = $character->influence;
        $characterInstance->insight       = $character->insight;
        $characterInstance->fortitude     = $character->fortitude;
        $characterInstance->focus         = $character->focus;

        $characterInstance->save();

        $character->load('talents');
        $character->talents->each(function (Talent $talent) use ($characterInstance) {
            $talentInstance = new TalentInstance([
                'talent_type_id'        => $talent->talent_type_id,
                'character_instance_id' => $characterInstance->id,
                'level'                 => $talent->level,
                'use_count'             => 0,
            ]);

            $talentInstance->save();
        });

        return $characterInstance;
    }
}
