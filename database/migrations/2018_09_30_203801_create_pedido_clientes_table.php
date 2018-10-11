<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_clientes', function (Blueprint $table) {
            $table->increments('idpedido_cliente');
            $table->integer('revisao_pedido');
            $table->date('data_pedido');
            $table->varchar('cd_pedido', 45);
            $table->varchar('mp', 45);
            $table->varchar('requisito_iso' , 45);
            $table->varchar('setor', 45);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido_clientes');
    }
}
