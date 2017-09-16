<?php

namespace Tests\Feature;

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

    public function can_search_for_characters() { }

    /** @test */
    public function can_display_form_to_create_a_character()
    {
        $response = $this->get('/characters/create');
        $response->assertStatus(200);
    }

    /** @test */
    public function can_store_a_character()
    {
        $user     = factory(User::class)->create();
        $response = $this->actingAs($user)->json('put', '/api/characters', ['name' => 'Bob']);
        $response->assertStatus(201);
        $response->assertJsonFragment(['name' => 'Bob']);
    }

    /** @test */
    public function can_reject_invalid_character_creation_request()
    {
        $user     = factory(User::class)->create();
        $response = $this->actingAs($user)->json('put', '/api/characters', ['foo' => 'bar']);
        var_dump($response->content());
        $response->assertStatus(422);
    }

    public function can_show_a_character() { }

    public function can_get_a_character() { }

    public function can_display_a_form_to_edit_a_character() { }

    public function can_update_a_character() { }

    public function can_delete_a_character() { }
}
