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
            $table->integer('original', false, true);
            $table->string('name', 80);
            $table->integer('health');
            $table->integer('health_max');
            $table->integer('focus');
            $table->integer('focus_max');
            $table->integer('turn_order');
            $table->integer('strength')->default(1);
            $table->integer('dexterity')->default(1);
            $table->integer('intelligence')->default(1);
            $table->integer('creativity')->default(1);
            $table->integer('endurance')->default(1);
            $table->integer('willpower')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('character_instances', function (Blueprint $table) {
            $table->foreign('original')->references('id')->on('characters');
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
