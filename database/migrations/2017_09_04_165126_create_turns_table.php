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
            $table->integer('encounter', false, true);
            $table->integer('order');
            $table->integer('character_instance', false, true);
            $table->timestamps();
        });

        Schema::table('turns', function (Blueprint $table) {
            $table->foreign('encounter')->references('id')->on('encounters');
            $table->foreign('character_instance')->references('id')->on('character_instances');
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
