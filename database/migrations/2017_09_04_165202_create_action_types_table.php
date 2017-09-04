<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('action_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->string('description');
            $table->timestamps();
        });

        Schema::table('actions', function (Blueprint $table) {
            $table->integer('action_type_id', false, true);

            $table->foreign('action_type_id')->references('id')->on('action_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('actions', function (Blueprint $table) {
            $table->dropForeign('actions_action_type_id_foreign');
            $table->dropColumn(['action_type_id']);
        });

        Schema::dropIfExists('action_types');
    }
}
