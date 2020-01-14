<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblcalificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblcalificaciones', function (Blueprint $table) {
            $table->increments('idcalificacion');
            $table->integer('codcita')-> unsigned();
            $table->integer('codpregunta')-> unsigned();
            $table->tinyInteger('calificacion');
            $table->foreign('codcita')->references('idcita')->on('tblcitas')->onDelete('CASCADE')->onCascade('CASCADE');
            $table->foreign('codpregunta')->references('idpregunta')->on('tblpreguntas')->onDelete('CASCADE')->onCascade('CASCADE');
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
        Schema::dropIfExists('tblcalificaciones');
    }
}
