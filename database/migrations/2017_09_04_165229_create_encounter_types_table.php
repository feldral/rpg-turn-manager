<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncounterTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encounter_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->string('description');
            $table->timestamps();
        });

        Schema::table('encounters', function (Blueprint $table) {
            $table->integer('encounter_type', false, true);

            $table->foreign('encounter_type')->references('id')->on('encounter_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encounter_types');

        Schema::table('encounters', function (Blueprint $table) {
            $table->dropColumn(['encounter_type']);
        });
    }
}
