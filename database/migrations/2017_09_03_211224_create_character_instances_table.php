<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharacterInstancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_instances', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('original_id', false, true);
            $table->integer('turn_order')->nullable();
            $table->integer('dominance')->default(1);
            $table->integer('dexterity')->default(1);
            $table->integer('comprehension')->default(1);
            $table->integer('creativity')->default(1);
            $table->integer('influence')->default(1);
            $table->integer('insight')->default(1);
            $table->integer('fortitude')->default(1);
            $table->integer('focus')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('character_instances', function (Blueprint $table) {
            $table->foreign('original_id')->references('id')->on('characters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('character_instances');
    }
}
