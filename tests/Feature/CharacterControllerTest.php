<?php

namespace Tests\Feature;

use App\Models\Character;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * Class CharacterControllerTests
 *
 * @package Tests\Unit
 */
class CharacterControllerTest extends TestCase
{

    /** @test */
    public function can_display_a_search_page_for_characters() { }

    /** @test */
    public function can_search_for_characters() { }

    /** @test */
    public function can_display_form_to_create_a_character()
    {
        //Arrange
        //Act
        $response = $this->get('/characters');
        //Assert
        $response->assertStatus(200);
        //todo check for html
    }

    /** @test */
    public function can_store_a_character()
    {
        //Arrange
        $user = factory(User::class)->create();
        //Act
        $response = $this->actingAs($user)->json('put', '/api/characters', ['name' => 'Bob']);
        //Assert
        $response->assertStatus(201);
        $response->assertJsonFragment(['name' => 'Bob']);
        $this->assertDatabaseHas('characters', ['id' => $response->json()['id'], 'name' => 'Bob']);
    }

    /** @test */
    public function can_reject_invalid_character_creation_request()
    {
        //Arrange
        $user = factory(User::class)->create();
        //Act
        $response = $this->actingAs($user)->json('put', '/api/characters', ['foo' => 'bar']);
        //Assert
        $response->assertStatus(422);
    }

    /** @test */
    public function can_show_a_character()
    {
        //Arrange
        $character = factory(Character::class)->create();
        //Act
        $response = $this->get("/characters/{$character->id}");
        //Assert
        $response->assertStatus(200);
        //todo check for html
    }

    /** @test */
    public function can_get_a_character()
    {
        //Arrange
        $character = factory(Character::class)->create(['name' => 'Phill']);
        //Act
        $response = $this->json('get', "/api/characters/{$character->id}");
        //Assert
        var_dump($response->content());
        $response->assertStatus(200);
        $response->assertJsonFragment(['id' => $character->id, 'name' => 'Phill']);
    }

    /** @test */
    public function can_display_a_form_to_edit_a_character()
    {
        //Arrange
        $user      = factory(User::class)->create();
        $character = factory(Character::class)->create(['owner_id' => $user->id]);
        //Act
        $response = $this->actingAs($user)->get("/characters/{$character->id}/edit");
        //Assert
        $response->assertStatus(200);
        //todo check for html
    }

    /** @test */
    public function cannot_edit_a_character_you_do_not_own()
    {
        //Arrange
        $user_other = factory(User::class)->create();
        $user       = factory(User::class)->create();
        $character  = factory(Character::class)->create(['owner_id' => $user->id]);
        //Act
        $response = $this->actingAs($user_other)->get("/characters/{$character->id}/edit");
        //Assert
        $response->assertStatus(401);
        //todo check for html
    }

    /** @test */
    public function can_update_a_character()
    {
        //Arrange
        $user      = factory(User::class)->create();
        $character = factory(Character::class)->create(['name' => 'Roger', 'owner_id' => $user->id]);
        //Act
        $response = $this->actingAs($user)->json('post', "/api/characters/{$character->id}", ['name' => 'Robert']);
        //Assert
        $response->assertStatus(200);
        $response->assertJsonFragment(['name' => 'Robert']);
        $this->assertDatabaseHas('characters', ['id' => $character->id, 'name' => 'Robert']);
    }

    public function can_reject_invalid_update_request()
    {
        //Arrange
        $user      = factory(User::class)->create();
        $character = factory(Character::class)->create(['name' => 'Roger', 'owner_id' => $user->id]);
        //Act
        $response = $this->actingAs($user)->json('post', "/api/characters/{$character->id}", ['foo' => 'bar']);
        //Assert
        $response->assertStatus(422);
    }

    /** @test */
    public function cannot_update_a_character_you_do_not_own()
    {
        //Arrange
        $user_other = factory(User::class)->create();
        $user       = factory(User::class)->create();
        $character  = factory(Character::class)->create(['name' => 'Roger', 'owner_id' => $user->id]);
        //Act
        $response = $this->actingAs($user_other)->json('post', "/api/characters/{$character->id}", ['name' => 'Robert']);
        //Assert
        $response->assertStatus(401);
        $this->assertDatabaseHas('characters', ['name' => 'Roger', 'id' => $character->id]);
    }

    /** @test */
    public function can_delete_a_character()
    {
        //Arrange
        $user      = factory(User::class)->create();
        $character = factory(Character::class)->create(['owner_id' => $user->id]);
        //Act
        $response = $this->actingAs($user)->json('delete', "/api/characters/{$character->id}");
        //Assert
        $response->assertStatus(200);
        $this->assertDatabaseMissing('characters', ['id' => $character->id]);
    }

    /** @test */
    public function cannot_delete_a_user_you_do_not_own()
    {
        //Arrange
        $user       = factory(User::class)->create();
        $user_other = factory(User::class)->create();
        $character  = factory(Character::class)->create(['owner_id' => $user->id]);
        //Act
        $response = $this->actingAs($user_other)->json('delete', "/api/characters/{$character->id}");
        //Assert
        $response->assertStatus(401);
        $this->assertDatabaseHas('characters', ['id' => $character->id]);
    }
}
