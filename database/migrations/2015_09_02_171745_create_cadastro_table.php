<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCadastroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastro', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('cadastro_tipo_id');
            $table->foreign('cadastro_tipo_id')->references('id')->on('cadastro_tipo');
            $table->string('nome');
            $table->string('email')->unique();
            $table->string('cpf_cnpj', 20);
            $table->string('telefone', 13);
            $table->string('celular', 14);
            $table->string('senha', 60);
            $table->string('endereco');
            $table->string('numero');
            $table->string('complemento');
            $table->string('bairro');
            $table->string('cidade');
            $table->unsignedInteger('estado_id');
            $table->foreign('estado_id')->references('id')->on('estado');
            $table->string('cep', 9);
            $table->char('receber_news', 1);
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
        Schema::drop('cadastro');
    }
}
