<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformaçõesResultadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informações_resultados', function (Blueprint $table) {
            $table->increments('idinformações_resultado');
            $table->decimal('vl_maximo', 10);
            $table->decimal('vl_minimo', 10);
            $table->integer('idinformações_resultado')->unsigned();
            $table->foreign('granulometria_produto_idgranulometria_produto')->references('id')->onDelete('cascade');
            $table->foreign('granulometria_produto_pedido_cliente_idpedido_cliente')->references('id')->onDelete('cascade');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informações_resultados');
    }
}
