<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTalentInstancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talent_instances', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('character_instance_id', false, true);
            $table->integer('talent_type_id', false, true);
            $table->integer('level', false, true)->default(1);
            $table->integer('use_count', false, true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('talent_instances');
    }
}
