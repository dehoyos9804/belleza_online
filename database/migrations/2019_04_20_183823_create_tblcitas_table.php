<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblcitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblcitas', function (Blueprint $table) {
            $table->increments('idcita');
            $table->date('fechaSolicitud');
            $table->integer('codhorarioempleado')-> unsigned();
            $table->integer('codcliente')-> unsigned();
            $table->smallInteger('estado');
            $table->time('horacita');
            $table->string('colorcita');
            $table->string('titulo');
            $table->text('descripcion')->nullable();
            $table->integer('numeropersonas');
            $table->foreign('codhorarioempleado')->references('idhorarioempleado')->on('tblhorariosempleados')->onDelete('CASCADE')->onCascade('CASCADE');
            $table->foreign('codcliente')->references('idcliente')->on('tblclientes')->onDelete('CASCADE')->onCascade('CASCADE');
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
        Schema::dropIfExists('tblcitas');
    }
}
