<?php

namespace Tests\Unit;

use App\Models\Character;
use App\Models\CharacterInstance;
use App\Models\Encounter;
use App\Models\Talent;
use Tests\TestCase;

class CharacterInstanceCreationTest extends TestCase
{

    /** @test */
    public function a_created_character_instance_has_all_talents_of_the_original()
    {
        //Arrange
        $character = factory(Character::class)->create();
        $talentOne = factory(Talent::class)->create(['character_id' => $character->id]);
        $talentTwo = factory(Talent::class)->create(['character_id' => $character->id]);
        $encounter = factory(Encounter::class)->create();
        //Act
        $characterInstance = CharacterInstance::createFrom($character, $encounter);
        //Assert
        $this->assertDatabaseHas('talent_instances', [
            'character_instance_id' => $characterInstance->id,
            'talent_type_id'        => $talentOne->talent_type_id,
        ]);
        $this->assertDatabaseHas('talent_instances', [
            'character_instance_id' => $characterInstance->id,
            'talent_type_id'        => $talentTwo->talent_type_id,
        ]);
    }
}
