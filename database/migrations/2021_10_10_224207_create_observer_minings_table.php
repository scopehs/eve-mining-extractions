<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObserverMiningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('observer_minings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('observer_id');
            $table->integer('character_id');
            $table->integer('recorded_corporation_id');
            $table->integer('quantity');
            $table->integer('type_id');
            $table->date('last_updated');
            $table->json('breakdown');

            $table->index(['observer_id']);
            $table->index(['character_id']);
            $table->index(['recorded_corporation_id']);
            $table->index(['type_id']);
            $table->index(['last_updated']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('observer_minings');
    }
}
