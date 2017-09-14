<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('owner_id')->unsigned();
            $table->string('name', 80);
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

        Schema::table('characters', function (Blueprint $table) {
            $table->foreign('owner_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters');
    }
}
