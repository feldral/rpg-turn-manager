<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class EncounterDefinitionControllerTest extends TestCase
{

    use DatabaseTransactions;

    /** @test */
    public function can_display_form_for_creating_new_encounter_definition() { }

    /** @test */
    public function can_create_an_encounter_definition() { }

    /** @test */
    public function can_display_a_list_of_encounter_definitions_by_encounter() { }

    /** @test */
    public function can_return_a_list_of_encounter_definitions_by_encounter() { }

    /** @test */
    public function can_display_form_for_editing_an_encounter_definition() { }

    /** @test */
    public function can_update_an_encounter_definition() { }

    /** @test */
    public function can_delete_an_encounter_definition() { }
}
