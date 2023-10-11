<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorporationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporations', function (Blueprint $table) {
            $table->integer('corporation_id');
            $table->string('name');
            $table->foreignId('alliance_id')->nullable();
            $table->string('ticker');
            $table->timestamps();

            $table->primary(['corporation_id']);
            $table->index(['corporation_id']);
            $table->index(['alliance_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('corporations');
    }
}
