<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcessoQuimicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processo_quimicos', function (Blueprint $table) {
            $table->increments('idProcesso_quimico');
            $table->varchar('operacao', 45);
            $table->text('observacao', 200);
            $table->varchar('status', 45);
            $table->varchar('lote', 45);
            $table->varchar('tp_amostragem', 45);
            $table->varchar('filtro', 10);
            $table->varchar('moinho', 10);
            $table->integer('idProcesso_quimico')->unsigned();
            $table->foreign('analise_quimica_idAnalise_quimica')->references('id')->onDelete('cascade');



            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('processo_quimicos');
    }
}
