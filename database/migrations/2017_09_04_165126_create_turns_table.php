<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turns', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('encounter_id', false, true);
            $table->integer('order');
            $table->integer('character_instance_id', false, true);
            $table->timestamps();
        });

        Schema::table('turns', function (Blueprint $table) {
            $table->foreign('encounter_id')->references('id')->on('encounters');
            $table->foreign('character_instance_id')->references('id')->on('character_instances');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turns');
    }
}
