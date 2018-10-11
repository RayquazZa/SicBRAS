<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriaPrimaEntsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materia_prima_ents', function (Blueprint $table) {
            $table->increments('idMateriaPrima');
            $table->string('nomeMatPrima',45);
            $table->integer('lote');
            $table->float('sobraAntNova');
            $table->float('sobraAntReciclada');
            $table->double('sobraMesAnterior');
            $table->float('sobraAtnSintetico');
            $table->float('sobraAntRecirculado');
            $table->unsingnedInteger('InsumoInf_idProdutoInf');
            $table->unsingnedInteger('InsumosInf_MatPrima_idMatPrima');
            $table->foreign('InsumosInf_idProdutoInf')->references('idProdutoInf')->on('InsumosInf');
            $table->foreign('InsumosInf_MatPrima_idMatPrima')->references('idMatPrima')->on('MatPrima');
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
        Schema::dropIfExists('materia_prima_ents');
    }
}
