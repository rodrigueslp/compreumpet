<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetRacaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pet_raca', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pet_tipo_id');
            $table->foreign('pet_tipo_id')->references('id')->on('pet_tipo');
            $table->string('nome', 100);
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
        Schema::drop('pet_raca');
    }
}
