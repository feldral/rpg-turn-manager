<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncountersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encounters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('host_id', false, true)->nullable();
            $table->integer('parent_id', false, true)->nullable();
            $table->boolean('is_public')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('encounters', function (Blueprint $table) {
            $table->foreign('host_id')->references('id')->on('users');
            $table->foreign('parent_id')->references('id')->on('encounters');
        });

        Schema::table('character_instances', function (Blueprint $table) {
            $table->integer('encounter_id', false, true);
            $table->foreign('encounter_id')->references('id')->on('encounters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('character_instances', function (Blueprint $table) {
            $table->dropForeign('character_instances_encounter_id_foreign');
            $table->dropColumn(['encounter_id']);
        });

        Schema::dropIfExists('encounters');
    }
}
