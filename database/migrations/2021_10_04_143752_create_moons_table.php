<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moons', function (Blueprint $table) {
            $table->integer('moon_id');
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
            $table->integer('orbit_index');

            $table->primary(['moon_id']);
            $table->index(['region_id']);
            $table->index(['constellation_id']);
            $table->index(['system_id']);
            $table->index(['planet_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('moons');
    }
}
