<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('turn', false, true);
            $table->integer('order');
            $table->integer('acting_character_instance_id', false, true);
            $table->integer('effected_character_instance_id', false, true);
            $table->timestamps();
        });

        Schema::table('actions', function (Blueprint $table) {
            $table->foreign('turn')->references('id')->on('turns');
            $table->foreign('acting_character_instance_id')->references('id')->on('character_instances');
            $table->foreign('effected_character_instance_id')->references('id')->on('character_instances');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actions');
    }
}
