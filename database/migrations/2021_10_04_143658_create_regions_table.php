<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionsTable extends Migration
{
    public function up()
    {
       Schema::create('regions', function (Blueprint $table) {
           $table->integer('region_id');
           $table->string('name');
   
           $table->primary(['region_id']);
       });
   }
   
   public function down()
   {
       Schema::dropIfExists('regions', function (Blueprint $table) {
           $table->timestamps();
       });
   }
}
