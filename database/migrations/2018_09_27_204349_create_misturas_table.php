<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMisturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('misturas', function (Blueprint $table) {
            $table->increments('idMistura');
            $table->double('numeroCf');
            $table->double('numeroKf');
            $table->double('kdCoqueBase');
            $table->double('kgAreiaBase');
            $table->double('kgCoqueReal');
            $table->double('kgAreiaReal');
            $table->double('mediaCoque');
            $table->double('mediaAreia');
            $table->integer('numeroBatelada');
            $table->string('turno',45);
            $table->double('coqueTotal');
            $table->double('areiaTotal');
            $table->double('totalMisturaDia');
            $table->integer('totalBatelada');
            $table->double('misturaTotal');
            $table->unsingnedInteger('');
            $table->unsingnedInteger('');
            $table->unsingnedInteger('');
            $table->unsingnedInteger('');
            $table->foreign('')->references('')->on('');
            $table->foreign('')->references('')->on('');
            $table->foreign('')->references('')->on('');
            $table->foreign('')->references('')->on('');
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
        Schema::dropIfExists('misturas');
    }
}
