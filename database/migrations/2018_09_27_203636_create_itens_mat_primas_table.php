<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItensMatPrimasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itens_mat_primas', function (Blueprint $table) {
            $table->increments('idItensMatPrima');
            $table->date('data');
            $table->string('lider',45);
            $table->integer('notaFiscal');
            $table->string('fornecedor',45);
            $table->double('quantidade');
            $table->double('entradaAcumulada');
            $table->string('observacoes',45);
            $table->double('umidade');
            $table->integer('forno');
            $table->integer('operacao');
            $table->double('quantReal');
            $table->string('transportadora',45);
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
        Schema::dropIfExists('itens_mat_primas');
    }
}
