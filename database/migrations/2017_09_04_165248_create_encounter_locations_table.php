<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncounterLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encounter_locations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->string('description');
            $table->timestamps();
        });

        Schema::table('encounters', function (Blueprint $table) {
            $table->integer('encounter_location_id')->unsigned();

            $table->foreign('encounter_location_id')->references('id')->on('encounter_locations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('encounters', function (Blueprint $table) {
            $table->dropForeign('encounters_encounter_location_id_foreign');
            $table->dropColumn(['encounter_location_id']);
        });

        Schema::dropIfExists('encounter_locations');
    }
}
