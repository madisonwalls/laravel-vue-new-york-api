<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('crimes', function(Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('address');
          $table->string('website');
          $table->string('phone');
          $table->string('cuisine');
          $table->string('rating');
          $table->string('hours');
          $table->string('notes');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('crimes');
    }
}
