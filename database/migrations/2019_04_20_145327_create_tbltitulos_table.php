<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbltitulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbltitulos', function (Blueprint $table) {
            $table->increments('idtitulo');
            $table->text('imagen');
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
        Schema::dropIfExists('tbltitulos');
    }
}
