<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultadoPeneirasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultado_peneiras', function (Blueprint $table) {
            $table->increments('idresultado_peneiras');
            $table->decimal('descrição_peneira', 20);
            $table->decimal('resultado_peneiras', 20);
            $table->integer('idresultado_peneiras')->unsigned();
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
        Schema::dropIfExists('resultado_peneiras');
    }
}
