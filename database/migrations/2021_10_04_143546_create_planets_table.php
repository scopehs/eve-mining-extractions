<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanetsTable extends Migration
{
    public function up()
    {
        Schema::create('planets', function (Blueprint $table) {
            $table->integer('planet_id');
            $table->integer('system_id');
            $table->integer('constellation_id');
            $table->integer('region_id');
            $table->string('name');
            $table->integer('type_id');
            $table->double('x');
            $table->double('y');
            $table->double('z');
            $table->double('radius');
            $table->integer('celestial_index');

            $table->primary(['planet_id']);
            $table->index(['region_id']);
            $table->index(['constellation_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('planets');
    }
}
