<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Cliente', function (Blueprint $table) {
          $table->increments('idCliente');
          $table->varchar('nm_nome', 45);
          $table->integer('nr_cpf');
          $table->integer('nr_cnpj');
          $table->integer('idCliente')->unsigned();
          $table->foreign('pedido_cliente_idpedido_cliente')->references('id')->onDelete('cascade');


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::dropIfExists('Cliente');
    }
}
