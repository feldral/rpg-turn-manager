<?php

namespace Tests\Feature;

use App\Models\EncounterType;
use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
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
        $response->assertStatus(200);
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
        var_dump($response->content());
        $response->assertJsonFragment($encounterTypeArray);
        $this->assertDatabaseHas('encounter_types', $encounterTypeArray);
        $response->assertStatus(201);
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
        $response->assertStatus(200);
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
        $response->assertStatus(200);
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
        $response->assertStatus(200);
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
        $response->assertStatus(200);
        $response->assertJsonFragment(['name' => $encounterType->name]);
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
        $response->assertStatus(200);
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
        $response->assertStatus(200);
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
        $response->assertStatus(200);
        $this->assertDatabaseMissing('encounter_types', [
            'id' => $encounterType->id,
        ]);
    }
}
