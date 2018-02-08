<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeritTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up() {
        Schema::create('merit', function (Blueprint $table) {
            $table->increments('id');
            $table->string('team');
            $table->integer('gamesPlayed');
            $table->integer('shotDifference');
            $table->integer('points');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('merit');
    }
}
