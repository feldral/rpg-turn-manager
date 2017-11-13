<?php

namespace Tests\Feature;

use App\Models\Character;
use App\Models\EncounterDefinition;
use App\Models\EncounterType;
use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\JsonResponse;
use Tests\TestCase;

class EncounterDefinitionControllerTest extends TestCase
{

    use DatabaseTransactions;

    /** @test */
    public function can_display_form_for_creating_new_encounter_definition()
    {
        //Arrange
        $user      = factory(User::class)->create();
        $encounter = factory(EncounterType::class)->create();
        //Act
        $response = $this->actingAs($user)->get("/encounters/types/{$encounter->id}/definitions");
        //Assert
        $response->assertStatus(JsonResponse::HTTP_OK);
        //todo check for html
    }

    /** @test */
    public function can_create_an_encounter_definition()
    {
        //Arrange
        $user          = factory(User::class)->create();
        $encounterType = factory(EncounterType::class)->create();
        $character     = factory(Character::class)->create();
        $request       = [
            'character_id' => $character->id,
        ];
        //Act
        $response = $this->actingAs($user)
            ->json('put', "/api/encounters/types/{$encounterType->id}/definitions", $request);
        //Assert
        $expectedResponse = [
            'character_id'      => $character->id,
            'encounter_type_id' => $encounterType->id,
        ];
        $response->assertJsonFragment($expectedResponse);
        $this->assertDatabaseHas('encounter_definitions', $expectedResponse);
        $response->assertStatus(JsonResponse::HTTP_CREATED);
    }

    /** @test */
    public function can_return_an_encounter_definition_by_id()
    {
        //Arrange
        $user                = factory(User::class)->create();
        $encounterDefinition = factory(EncounterDefinition::class)->create();
        //Act
        $response = $this->actingAs($user)->get("/api/encounters/types/definitions/{$encounterDefinition->id}");
        //Assert
        $response->assertStatus(JsonResponse::HTTP_OK);
    }

    /** @test */
    public function can_display_form_for_editing_an_encounter_definition()
    {
        //Arrange
        $user                = factory(User::class)->create();
        $encounterDefinition = factory(EncounterDefinition::class)->create();
        //Act
        $response = $this->actingAs($user)->get("/encounters/types/definitions/{$encounterDefinition->id}");
        //Assert
        $response->assertStatus(JsonResponse::HTTP_OK);
        //todo check for html
    }

    /** @test */
    public function can_update_an_encounter_definition()
    {
        //Arrange
        $user                = factory(User::class)->create();
        $character           = factory(Character::class)->create();
        $encounterType       = factory(EncounterType::class)->create();
        $encounterDefinition = factory(EncounterDefinition::class)->create(['encounter_type_id' => $encounterType->id]);
        $request             = ['character_id' => $character->id];
        //Act
        $response = $this->actingAs($user)
            ->json('post', "/api/encounters/types/definitions/{$encounterDefinition->id}", $request);
        //Assert
        $response->assertJsonFragment(['character_id' => $character->id]);
        $this->assertDatabaseHas('encounter_definitions', [
            'id'           => $encounterDefinition->id,
            'character_id' => $character->id,
        ]);
        $response->assertStatus(JsonResponse::HTTP_OK);
    }

    /** @test */
    public function can_delete_an_encounter_definition()
    {
        //Arrange
        $user                = factory(User::class)->create();
        $encounterDefinition = factory(EncounterDefinition::class)->create();
        //Act
        $response = $this->actingAs($user)
            ->json('delete', "/api/encounters/types/definitions/{$encounterDefinition->id}");
        //Assert
        $this->assertDatabaseMissing('encounter_definitions', [
            'id' => $encounterDefinition->id,
        ]);
        $response->assertStatus(JsonResponse::HTTP_OK);
    }
}
