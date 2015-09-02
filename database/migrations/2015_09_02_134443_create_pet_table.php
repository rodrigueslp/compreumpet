<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pet', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pet_raca_id');
            $table->foreign('pet_raca_id')->references('id')->on('pet_raca');
            $table->string('titulo', 255);
            $table->char('doacao', 1);
            $table->integer('quantidade_macho');
            $table->integer('quantidade_femea');
            $table->float('valor_macho');
            $table->float('valor_femea');
            $table->text('observacao');
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
        Schema::drop('pet');
    }
}
