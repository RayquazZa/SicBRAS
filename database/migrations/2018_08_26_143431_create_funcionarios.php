<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_funcionario');
            $table->string('email_funcionario')->unique();
            $table->string('instrutor');
            $table->string('situacao');

            $table->integer('cargos_id')->unsigned();
            $table->foreign('cargos_id')->references('id')->on('cargos');
            
            $table->integer('cetors_id')->unsigned();
            $table->foreign('cetors_id')->references('id')->on('cetors');
            
            $table->integer('departamentos_id')->unsigned();
            $table->foreign('departamentos_id')->references('id')->on('departamentos');
            

            

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
        Schema::dropIfExists('funcionarios');
    }
}
