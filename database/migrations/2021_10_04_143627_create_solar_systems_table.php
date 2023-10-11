<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolarSystemsTable extends Migration
{
    public function up()
    {
        Schema::create('solar_systems', function (Blueprint $table) {
            $table->integer('system_id');
            $table->integer('constellation_id');
            $table->integer('region_id');
            $table->string('name');
            $table->double('security');
            $table->double('x');
            $table->double('y');
            $table->double('z');

            $table->primary(['system_id']);
            $table->index(['region_id']);
            $table->index(['constellation_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('solar_systems');
    }
}
