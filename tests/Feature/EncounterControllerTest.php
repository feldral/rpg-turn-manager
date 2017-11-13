<?php

namespace Tests\Feature;

use App\Models\Encounter;
use App\Models\EncounterDefinition;
use App\Models\EncounterType;
use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\JsonResponse;
use Tests\TestCase;

/**
 * Class EncounterControllerTest
 *
 * @package Tests\Feature
 */
class EncounterControllerTest extends TestCase
{

    use DatabaseTransactions;

    /** @test */
    public function can_display_form_for_creating_encounter()
    {
        //Arrange
        $user = factory(User::class)->create();
        //Act
        $response = $this->actingAs($user)->get('/encounters/create');
        //Assert
        $response->assertStatus(JsonResponse::HTTP_OK);
        //todo check for html
    }

    /** @test */
    public function can_create_encounter()
    {
        //Arrange
        $user           = factory(User::class)->create();
        $encounterType  = factory(EncounterType::class)->create();
        $encounterArray = [
            'encounter_type_id' => $encounterType->id,
            'is_public'         => false,
        ];
        //Act
        $response = $this->actingAs($user)->json('put', '/api/encounters', $encounterArray);
        //Assert
        $this->assertDatabaseHas('encounters', ['id' => $response->json()['id']]);
        $response->assertStatus(JsonResponse::HTTP_CREATED);
    }

    /** @test */
    public function can_display_a_list_of_encounters()
    {
        //Arrange
        $user         = factory(User::class)->create();
        $encounterOne = factory(Encounter::class)->create();
        $encounterTwo = factory(Encounter::class)->create();
        //Act
        $response = $this->actingAs($user)->get('/encounters');
        //Assert
        $response->assertStatus(JsonResponse::HTTP_OK);
        //todo check for html
    }

    /** @test */
    public function can_list_encounters()
    {
        //Arrange
        $user         = factory(User::class)->create();
        $encounterOne = factory(Encounter::class)->create();
        $encounterTwo = factory(Encounter::class)->create();
        //Act
        $response = $this->actingAs($user)->json('get', '/api/encounters');
        //Assert
        $response->assertJsonFragment($encounterOne->toArray());
        $response->assertJsonFragment($encounterTwo->toArray());
        $response->assertStatus(JsonResponse::HTTP_OK);
    }

    /** @test */
    public function can_display_an_encounter()
    {
        //Arrange
        $user      = factory(User::class)->create();
        $encounter = factory(Encounter::class)->create();
        //Act
        $response = $this->actingAs($user)->get("/encounters/{$encounter->id}");
        //Assert
        $response->assertStatus(JsonResponse::HTTP_OK);
        //todo check for html
    }

    /** @test */
    public function can_return_an_encounter()
    {
        //Arrange
        $user      = factory(User::class)->create();
        $encounter = factory(Encounter::class)->create();
        //Act
        $response = $this->actingAs($user)->json('get', "/api/encounters/{$encounter->id}");
        //Assert
        $response->assertJsonFragment($encounter->toArray());
        $response->assertStatus(JsonResponse::HTTP_OK);
    }

    /** @test */
    public function can_display_a_form_for_editing_an_encounter()
    {
        //Arrange
        $user      = factory(User::class)->create();
        $encounter = factory(Encounter::class)->create();
        //Act
        $response = $this->actingAs($user)->get("/encounters/{$encounter->id}/edit");
        //Assert
        $response->assertStatus(JsonResponse::HTTP_OK);
        //todo check for html
    }

    /** @test */
    public function can_update_an_encounter()
    {
        //Arrange
        $user                  = factory(User::class)->create();
        $encounter             = factory(Encounter::class)->create(['is_public' => true]);
        $encounterUpdateArray  = ['is_public' => false];
        $updatedEncounterArray = ['id' => $encounter->id, 'is_public' => false];
        //Act
        $response = $this->actingAs($user)->json('post', "/api/encounters/{$encounter->id}", $encounterUpdateArray);
        //Assert
        $response->assertJsonFragment($updatedEncounterArray);
        $this->assertDatabaseHas('encounters', $updatedEncounterArray);
        $response->assertStatus(JsonResponse::HTTP_OK);
    }

    /** @test */
    public function can_delete_an_encounter()
    {
        //Arrange
        $user      = factory(User::class)->create();
        $encounter = factory(Encounter::class)->create();
        //Act
        $response = $this->actingAs($user)->json('delete', "/api/encounters/{$encounter->id}");
        //Assert
        $response->assertStatus(JsonResponse::HTTP_OK);
        $this->assertDatabaseMissing('encounters', ['id' => $encounter->id]);
    }

    /** @test */
    public function can_populate_an_encounter_based_on_the_encounter_definition()
    {
        //Arrange
        $user                   = factory(User::class)->create();
        $encounterType          = factory(EncounterType::class)->create();
        $encounterDefinitionOne = factory(EncounterDefinition::class)->create(['encounter_type_id' => $encounterType->id]);
        $encounterDefinitionTwo = factory(EncounterDefinition::class)->create(['encounter_type_id' => $encounterType->id]);
        $encounterArray         = [
            'encounter_type_id' => $encounterType->id,
            'is_public'         => false,
        ];
        //Act
        $response = $this->actingAs($user)->json('put', '/api/encounters', $encounterArray);
        //Assert
        $this->assertDatabaseHas('encounters', ['id' => $response->json()['id']]);
        $this->assertDatabaseHas('character_instances', ['id' => $encounterDefinitionOne->character_id]);
        $this->assertDatabaseHas('character_instances', ['id' => $encounterDefinitionTwo->character_id]);
        $response->assertStatus(201);
    }
}
