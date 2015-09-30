<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('rg');
            $table->string('sexo');
            $table->string('email');
            $table->integer('codigo')->unique();
            $table->string('chapa');
            $table->integer('funcaoid')->unsigned();
            $table->foreign('funcaoid')->references('id')->on('funcoes');
            $table->char('ativo',1)->default('t');
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
        Schema::drop('funcionarios');
    }
}
