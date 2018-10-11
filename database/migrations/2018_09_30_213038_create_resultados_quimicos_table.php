<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultadosQuimicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultados_quimicos', function (Blueprint $table) {
            $table->increments('idresultados_quimicos');
            $table->decimal('PPC' , 10);
            $table->decimal('H2C', 10);
            $table->decimal('algomeração', 10);
            $table->decimal('densidade', 10);
            $table->varchar('media_mes', 45);
            $table->decimal('vl_calsio_oxig', 10);
            $table->decimal('vl_maginesio_oxig', 10);
            $table->decimal('vl_D/S', 10);
            $table->decimal('vl_cinzas', 10);
            $table->decimal('vl_volatil', 10);
            $table->decimal('vl_KF', 10);
            $table->varchar('vl_KF_medio', 10);
            $table->decimal('c-fixo', 10);
            $table->decimal('c-livre', 10);
            $table->decimal('c-reagido', 10);
            $table->decimal('vl_carbeto_silicio', 10);
            $table->decimal('vl_carbeto_silicio_Hourizado', 10);
            $table->decimal('vl_silicio_oxigenado', 10);
            $table->decimal('vl_si-livre', 10);
            $table->decimal('vl_silicio' , 10);
            $table->decimal('vl_si-reagido', 10);
            $table->decimal('vl_si+so2', 10);
            $table->decimal('vl_Al2C3', 10);
            $table->decimal('vl_aluminio', 10);
            $table->decimal('ph_torre_pequena', 10);
            $table->decimal('ph_torre_grande', 10);
            $table->decimal('ph_aqua', 10);
            $table->varchar('vl_fe2o3' , 10);
            $table->integer('idresultados_quimicos')->unsigned();
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
        Schema::dropIfExists('resultados_quimicos');
    }
}
