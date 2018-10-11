<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnaliseQuimicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analise_quimicas', function (Blueprint $table) {
            $table->increments('idAnalise_quimica');
            $table->varchar('nr_analise', 45);
            $table->integer('nr_embalagem',);
            $table->varchar('nr_referencia', 45);
            $table->integer('idAnalise_quimica')->unsigned();
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
        Schema::dropIfExists('analise_quimicas');
    }
}
