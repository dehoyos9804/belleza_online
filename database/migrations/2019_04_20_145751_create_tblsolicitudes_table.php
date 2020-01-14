<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblsolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblsolicitudes', function (Blueprint $table) {
            $table->increments('idsolicitud');
            $table->dateTime('fechasolicitud');
            $table->tinyInteger('estado');
            $table->integer('codempleado')-> unsigned();
            $table->foreign('codempleado')->references('idempleado')->on('tblempleados')->onDelete('CASCADE')->onCascade('CASCADE');
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
        Schema::dropIfExists('tblsolicitudes');
    }
}
