<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultadoFisicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultado_fisicas', function (Blueprint $table) {
            $table->increments('idResultado_fisica');
            $table->date('data');
            $table->varchar('nr_Bag_referencia', 45);
            $table->integer('quantidade');
            $table->decimal('densidade', 10);
            $table->decimal('resultado_pesado', 10);
            $table->decimal('resultado_encontrado', 10);
            $table->decimal('gramas', 10);
            $table->varchar('alimentação', 45);
            $table->varchar('ordem_producao', 45);
            $table->varchar('equipamento', 45);
            $table->decimal('telas', 10);
            $table->float('status');
            $table->integer('idResultado_fisica')->unsigned();
            $table->foreign('informações_resultado_idinformações_resultado')->references('id')->onDelete('cascade');





        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resultado_fisicas');
    }
}
