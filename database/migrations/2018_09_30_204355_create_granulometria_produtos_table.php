<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGranulometriaProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('granulometria_produtos', function (Blueprint $table) {
            $table->increments('idgranulometria_produto');
            $table->decimal('tamanho_maximo', 20);
            $table->decimal('tamanho_minimo', 20);
            $table->varchar('pureza_produto', 45);
            $table->decimal('fracao(ASTM)' , 10);
            $table->decimal('ASTM(mm)', 10);
            $table->integer('idgranulometria_produto')->unsigned();
            $table->foreign('pedido_cliente_idpedido_cliente')->references('id')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('granulometria_produtos');
    }
}
