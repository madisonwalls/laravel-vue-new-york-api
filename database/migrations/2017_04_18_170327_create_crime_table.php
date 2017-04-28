<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//Sets up table in mySQL to store data from users

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
          $table->string('charge');
          $table->string('location');
          $table->integer('year');
          $table->string('month');
          $table->string('suspect');
          $table->string('gender');
          $table->string('age');
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
