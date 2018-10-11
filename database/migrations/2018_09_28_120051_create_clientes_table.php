<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('idClientes');
            $table->string('nome')->nullable();
            $table->string('cpf');
            $table->string('cnpj');
            $table->integer('contato_clientes_idContatos')->unsigned()->nullable();
            $table->foreign('contato_clientes_idContatos')->references('idContatos')->on('contato_clientes');
            $table->integer('enderecos_idEnderecos')->unsigned()->nullable();
            $table->foreign('enderecos_idEnderecos')->references('idEnderecos')->on('enderecos');
            $table->softDeletes();
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
        Schema::dropIfExists('clientes');
    }
}
