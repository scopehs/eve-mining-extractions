<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtractionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extractions', function (Blueprint $table) {
            $table->id();
            $table->integer('corporation_id');
            $table->integer('moon_id');
            $table->dateTime('extraction_start_time');
            $table->dateTime('chunk_arrival_time');
            $table->dateTime('natural_decay_time');

            $table->index(['corporation_id']);
            $table->index(['moon_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('extractions');
    }
}
