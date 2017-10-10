<?php

namespace Tests\Feature;

use App\Models\TalentType;
use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

/**
 * Class TalantTypeControllerTest
 *
 * @package Tests\Feature
 */
class TalentTypeControllerTest extends TestCase
{

    use DatabaseTransactions;

    /** @test */
    public function can_display_form_for_making_a_talent_type()
    {
        //Arrange
        $user = factory(User::class)->create();
        //Act
        $response = $this->actingAs($user)->get('/talents/types/create');
        //Assert
        $response->assertStatus(200);
        //todo check for html
    }

    /** @test */
    public function can_create_a_talent_type()
    {
        //Arrange
        $user    = factory(User::class)->create();
        $request = [
            'name'        => 'Fire Ball',
            'slug'        => 'fire_ball',
            'description' => 'A large fiery construct that is hurled at a target',
        ];
        //Act
        $response = $this->actingAs($user)->json('put', "api/talents/types", $request);
        //Assert
        $response->assertJsonFragment($request);
        $this->assertDatabaseHas('talent_types', $request);
        $response->assertStatus(201);
    }

    /** @test */
    public function can_display_a_talent_type()
    {
        //Arrange
        $user       = factory(User::class)->create();
        $talentType = factory(TalentType::class)->create();
        //Act
        $response = $this->actingAs($user)->get("/talents/types/{$talentType->id}");
        //Assert
        $response->assertStatus(200);
        //todo check for html
    }

    /** @test */
    public function can_return_a_talent_type()
    {
        //Arrange
        $user       = factory(User::class)->create();
        $talentType = factory(TalentType::class)->create();
        //Act
        $response = $this->actingAs($user)->json('get', "api/talents/types/{$talentType->id}");
        //Assert
        $response->assertJsonFragment($talentType->toArray());
        $response->assertStatus(200);
    }

    /** @test */
    public function can_display_form_to_edit_a_talent_type()
    {
        //Arrange
        $user       = factory(User::class)->create();
        $talentType = factory(TalentType::class)->create();
        //Act
        $response = $this->actingAs($user)->get("/talents/types/{$talentType->id}/edit");
        //Assert
        $response->assertStatus(200);
        //todo check for html
    }

    /** @test */
    public function can_update_a_talent_type()
    {
        //Arrange
        $user       = factory(User::class)->create();
        $talentType = factory(TalentType::class)->create(['name' => 'Push']);
        $request    = ['name' => 'Shove'];
        //Act
        $response = $this->actingAs($user)->json('post', "api/talents/types/{$talentType->id}", $request);
        //Assert
        $response->assertJsonFragment($request);
        $response->assertStatus(200);
        $this->assertDatabaseHas('talent_types', ['id' => $talentType->id, 'name' => 'Shove']);
    }

    /** @test */
    public function can_delete_a_talent_type()
    {
        //Arrange
        $user       = factory(User::class)->create();
        $talentType = factory(TalentType::class)->create();
        //Act
        $response = $this->actingAs($user)->json('delete', "api/talents/types/{$talentType->id}");
        //Assert
        $response->assertStatus(200);
        $this->assertDatabaseMissing('talent_types', ['id' => $talentType->id]);
    }
}
