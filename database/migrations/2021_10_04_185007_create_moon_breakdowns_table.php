<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoonBreakdownsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moon_breakdowns', function (Blueprint $table) {
            $table->id();
            $table->integer('moon_id');
            $table->integer('rarity');
            $table->decimal('extraction_value_day', $precision = 12, $scale = 2);
            $table->json('dna');
            $table->json('goo');

            $table->timestamps();

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
        Schema::dropIfExists('moon_breakdowns');
    }
}
