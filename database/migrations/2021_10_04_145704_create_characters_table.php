<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->integer('character_id');
            $table->string('name');
            $table->foreignId('corporation_id');
            $table->foreignId('alliance_id')->nullable();
            $table->timestamps();

            $table->primary(['character_id']);
            $table->index(['character_id']);
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
        Schema::dropIfExists('characters');
    }
}
