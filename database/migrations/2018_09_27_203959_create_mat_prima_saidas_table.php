<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatPrimaSaidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mat_prima_saidas', function (Blueprint $table) {
            $table->increments('IdMatPrimaSaida');
            $table->string('nomeMatPrima',45);
            $table->date('data');
            $table->string('lider',45);
            $table->string('destino',20);
            $table->double('saida');
            $table->double('saidaAcumulada');
            $table->double('umidade');
            $table->double('quantReal');
            $table->integer('quantBags');
            $table->string('forno',45);
            $table->string('operacao',45);
            $table->string('fornecedor',45);
            $table->unsingnedInteger('MateriaPrimaEnt_idMateriaPrima');
            $table->unsingnedInteger('MateriaPrimaEnt_InsumosInf_IdProdutos');
            $table->unsingnedInteger('MateriaPrimaEnt_InsumosInf_MatPrima_IdMatPrima');
            $table->foreign('MateriaPrimaEnt_idMateriaPrima')->references('idMateriaPrima')->on('MateriaPrimaEnt');
            $table->foreign('MateriaPrimaEnt_InsumosInf_IdProdutos')->references('IdProdutos')->on('IdProdutos');
            $table->foreign('MateriaPrimaEnt_InsumosInf_MatPrima_IdMatPrima')->references('IdMatPrima')->on('MatPrima');
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
        Schema::dropIfExists('mat_prima_saidas');
    }
}
