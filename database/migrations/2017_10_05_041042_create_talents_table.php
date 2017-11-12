<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTalentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('talent_type_id', false, true);
            $table->integer('character_id', false, true);
            $table->integer('level', false, true);
            $table->integer('progression', false, true);
            $table->date('last_level_up');
            $table->timestamps();

            $table->foreign('talent_type_id')->references('id')->on('talent_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('talents');
    }
}
