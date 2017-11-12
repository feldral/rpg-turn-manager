<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncounterDefinitionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encounter_definitions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('character_id', false, true);
            $table->integer('encounter_type_id', false, true);
            $table->timestamps();

            $table->foreign('character_id')->references('id')->on('characters');
            $table->foreign('encounter_type_id')->references('id')->on('encounter_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encounter_definitions');
    }
}
