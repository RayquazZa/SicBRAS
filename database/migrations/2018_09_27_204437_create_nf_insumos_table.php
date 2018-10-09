<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNfInsumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nf_insumos', function (Blueprint $table) {
            $table->increments('idNfsInsumos');
            $table->double('valorAcordoReal');
             $table->double('cambio');
             $table->double('valorAcordoDolar');
             $table->integer('valorProdComImpost');
             $table->integer('icms');
             $table->integer('pisCofins');
             $table->integer('ipi');
             $table->interger('encargoMes');
             $table->integer('valorProdSemImpostReal');
             $table->interger('valorProdSemImpostDolar');
             $table->integer('valorFrete');
             $table->integer('valorprodnf');
             $table->interger('valorprodfrete');
             $table->unsingnedInteger('insumo_inf_idProdutoInf');
             $table->unsingnedInteger('InsumosInf_MatPrima_idMatPrima');
             $table->foreign('insumos_inf_idProdutoInf')->references('idProdutoInf')->on('insumos_inf');
             $table->foreign('insumos_inf_MatPrima_idMatPrima')->references('idMatPrima')->on('mat_prima');
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
        Schema::dropIfExists('nf_insumos');
    }
}
