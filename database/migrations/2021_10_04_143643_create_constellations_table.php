<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConstellationsTable extends Migration
{
    public function up()
    {
        Schema::create('constellations', function (Blueprint $table) {
            $table->integer('constellation_id');
            $table->integer('region_id');
            $table->string('name');

            $table->primary(['constellation_id']);
            $table->index(['region_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('constellations');
    }
}
