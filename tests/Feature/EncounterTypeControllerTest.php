<?php

namespace Tests\Feature;

use App\Models\EncounterDefinition;
use App\Models\EncounterType;
use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\JsonResponse;
use Tests\TestCase;

/**
 * Class EncounterTypeControllerTest
 *
 * @package Tests\Feature
 */
class EncounterTypeControllerTest extends TestCase
{

    use DatabaseTransactions;

    /** @test */
    public function can_display_form_for_creating_encounter_type()
    {
        //Arrange
        $user = factory(User::class)->create();
        //Act
        $response = $this->actingAs($user)->get('/encounters/types/create');
        //Assert
        $response->assertStatus(JsonResponse::HTTP_OK);
        //todo check for html
    }

    /** @test */
    public function can_create_encounter_type()
    {
        //Arrange
        $user               = factory(User::class)->create();
        $encounterTypeArray = [
            'slug'                  => 'boss-fight',
            'description'           => 'destroyer of worlds final showdown',
            'name'                  => 'World Ender: the Destroyer',
            'has_strict_turn_order' => true,
        ];
        //Act
        $response = $this->actingAs($user)->json('put', '/api/encounters/types', $encounterTypeArray);
        //Assert
        $response->assertJsonFragment($encounterTypeArray);
        $this->assertDatabaseHas('encounter_types', $encounterTypeArray);
        $response->assertStatus(JsonResponse::HTTP_CREATED);
    }

    /** @test */
    public function can_display_a_list_of_encounter_types()
    {
        //Arrange
        $user = factory(User::class)->create();
        factory(EncounterType::class)->create();
        factory(EncounterType::class)->create();
        //Act
        $response = $this->actingAs($user)->get('/encounters/types');
        //Assert
        $response->assertStatus(JsonResponse::HTTP_OK);
        //todo check for html
    }

    /** @test */
    public function can_list_encounter_types()
    {
        //Arrange
        $user             = factory(User::class)->create();
        $encounterTypeOne = factory(EncounterType::class)->create();
        $encounterTypeTwo = factory(EncounterType::class)->create();
        //Act
        $response = $this->actingAs($user)->json('get', 'api/encounters/types');
        //Assert
        $response->assertStatus(JsonResponse::HTTP_OK);
        $response->assertJsonFragment($encounterTypeOne->toArray());
        $response->assertJsonFragment($encounterTypeTwo->toArray());
    }

    /** @test */
    public function can_display_an_encounter_type()
    {
        //Arrange
        $user          = factory(User::class)->create();
        $encounterType = factory(EncounterType::class)->create();
        //Act
        $response = $this->actingAs($user)->get("/encounters/types/{$encounterType->id}");
        //Assert
        $response->assertStatus(JsonResponse::HTTP_OK);
        //todo check for html
    }

    /** @test */
    public function can_return_an_encounter_type()
    {
        //Arrange
        $user          = factory(User::class)->create();
        $encounterType = factory(EncounterType::class)->create();
        //Act
        $response = $this->actingAs($user)->json('get', "/api/encounters/types/{$encounterType->id}");
        //Assert
        $response->assertStatus(JsonResponse::HTTP_OK);
        $response->assertJsonFragment(['name' => $encounterType->name]);
    }

    /** @test */
    public function returned_encounter_type_shows_all_encounter_definitions(){
        //Arrange
        $user = factory(User::class)->create();
        $encounterType = factory(EncounterType::class)->create();
        $encounterDefinitionOne = factory(EncounterDefinition::class)->create(['encounter_type_id'=>$encounterType->id]);
        $encounterDefinitionTwo = factory(EncounterDefinition::class)->create(['encounter_type_id'=>$encounterType->id]);
        //Act
        $response = $this->actingAs($user)->json('get', "/api/encounters/types/{$encounterType->id}");
        //Assert
        $response->assertJsonFragment(['encounter_definitions'=>[$encounterDefinitionOne->toArray(),$encounterDefinitionTwo->toArray()]]);
        $response->assertStatus(JsonResponse::HTTP_OK);
    }

    /** @test */
    public function can_display_a_form_for_editing_an_encounter_type()
    {
        //Arrange
        $user          = factory(User::class)->create();
        $encounterType = factory(EncounterType::class)->create();
        //Act
        $response = $this->actingAs($user)->get("/encounters/types/{$encounterType->id}");
        //Assert
        $response->assertStatus(JsonResponse::HTTP_OK);
        //todo check for html
    }

    /** @test */
    public function can_update_an_encounter_type()
    {
        //Arrange
        $user                  = factory(User::class)->create();
        $encounterType         = factory(EncounterType::class)->create();
        $newEncounterTypeName  = 'Funny Business';
        $updatedObjectFragment = [
            'id'   => $encounterType->id,
            'name' => $newEncounterTypeName,
        ];
        //Act
        $response = $this->actingAs($user)->json('post', "/api/encounters/types/{$encounterType->id}", [
            'name' => $newEncounterTypeName,
        ]);
        //Assert
        $response->assertStatus(JsonResponse::HTTP_OK);
        $response->assertJsonFragment($updatedObjectFragment);
        $this->assertDatabaseHas('encounter_types', $updatedObjectFragment);
    }

    /** @test */
    public function can_delete_an_encounter_type()
    {
        //Arrange
        $user          = factory(User::class)->create();
        $encounterType = factory(EncounterType::class)->create();
        //Act
        $response = $this->actingAs($user)->json('delete', "/api/encounters/types/{$encounterType->id}");
        //Assert
        $response->assertStatus(JsonResponse::HTTP_OK);
        $this->assertDatabaseMissing('encounter_types', [
            'id' => $encounterType->id,
        ]);
    }
}
