<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('funcionarioid')->unsigned();
            $table->foreign('funcionarioid')->references('codigo')->on('funcionarios');
            $table->integer('produtoid');
            $table->integer('quantidade');
            $table->double('valor', 3, 2);
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
        Schema::drop('pedidos');
    }
}
