<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChampionshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up() {
        Schema::create('championship', function (Blueprint $table) {
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
        Schema::dropIfExists('championship');
    }
}
