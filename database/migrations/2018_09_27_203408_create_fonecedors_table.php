<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFonecedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fonecedors', function (Blueprint $table) {
            $table->increments('idFornecedor');
            $table->string('nomeFantasia',45);
            $table->string('numeroTelefone',45);
            $table->string('email',45);
            $table->unsingnedInteger('InsumoInf_idProdutoInf');
            $table->unsingnedInteger('InsumosInf_MatPrima_idMatPrima');
            $table->foreign('InsumoInf_idProdutoInf')->references('idProdutoInf')->on('InsumosInf');
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
        Schema::dropIfExists('fonecedors');
    }
}
