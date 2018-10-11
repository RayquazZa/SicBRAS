<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsumosInfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insumos_infs', function (Blueprint $table) {
            $table->increments('idProdutoInf');
            $table->string('nomeMatPrima',45);
            $table->date('dtRecebimento');
            $table->date('dtExpedicao');
            $table->integer('fornecedor');
            $table->integer('notaFiscal');
            $table->double('pesoNota');
            $table->double('pesoSicbras');
            $table->double('pesoDiferenca');
            $table->integer('cte');
            $table->double('saldoretirar');
            $table->string('transportadora',45);
            $table->unsingnedInteger('Matprima_idMatPrima');
            $table->foreign('Matprima_idMatPrima')->references('idMatPrima')->on('MatPrima');
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
        Schema::dropIfExists('insumos_infs');
    }
}
