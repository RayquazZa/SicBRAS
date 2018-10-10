<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vouchers', function (Blueprint $table) {
            $table->increments('idVouchers');
            $table->string('turnos',45);
            $table->date('data');
            $table->string('respAmostragem',45);
            $table->string('matPrima');
            $table->integer('lote');
            $table->integer('ano');
            $table->integer('nmOperacao');
            $table->integer('nmForno');
            $table->string('fornecedor',45);
            $table->string('origem',45);
            $table->string('tipoMistura',45);
            $table->string('amostraTeste',45);
            $table->string('material',45);
            $table->string('identAmostra',45);
            $table->unsingnedInteger('Mistura_IdMistura');
            $table->unsingnedInteger('');
            $table->unsingnedInteger('');
            $table->unsingnedInteger('');
            $table->unsingnedInteger('');
            $table->foreign('Mistura_IdMistura')->references('IdMistura')->on('Mistura');
            $table->foreign('')->references('')->on('');
            $table->foreign('')->references('')->on('');
            $table->foreign('')->references('')->on('');
            $table->foreign('')->references('')->on('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vouchers');
    }
}
