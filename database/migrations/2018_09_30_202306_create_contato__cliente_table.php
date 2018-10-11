<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContatoClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Contato_Cliente', function (Blueprint $table) {
            $table->increments('idcontato_cliente');
            $table->varchar('nr_telefone' , 45);
            $table->varchar('email_cliente', 45);
            $table->integer('idcontato_cliente')->unsigned();
            $table->foreign('cliente idCliente')->references('id')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Contato_Cliente');
    }
}
