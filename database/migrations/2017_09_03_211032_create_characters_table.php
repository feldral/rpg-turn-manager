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
            $table->integer('owner')->unsigned();
            $table->string('name', 80);
            $table->integer('strength')->default(1);
            $table->integer('dexterity')->default(1);
            $table->integer('intelligence')->default(1);
            $table->integer('creativity')->default(1);
            $table->integer('endurance')->default(1);
            $table->integer('willpower')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('characters', function (Blueprint $table) {
            $table->foreign('owner')->references('id')->on('users');
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
