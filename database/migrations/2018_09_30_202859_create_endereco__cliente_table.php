<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnderecoClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Endereco__Cliente', function (Blueprint $table) {
            $table->increments('idEndereco_cliente');
            $table->varchar('nm_cidade', 45);
            $table->varchar('nm_estado', 45);
            $table->integer('cep');
            $table->varchar('nm_bairro', 30);
            $table->varchar('complemento', 20);
            $table->varchar('uf', 3);
            $table->varchar('rua' , 30);
            $table->integer('idEndereco_cliente')->unsigned();
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
        Schema::dropIfExists('Endereco__Cliente');
    }
}
