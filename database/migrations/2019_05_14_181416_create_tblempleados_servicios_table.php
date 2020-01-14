<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblempleadosServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblempleadosservicios', function (Blueprint $table) {
            $table->increments('idempleadoservicio');
            $table->integer('codempleado')-> unsigned();
            $table->integer('codservicio')-> unsigned();
            $table->double('valorservicio', 15, 2)->nullable();
            $table->foreign('codempleado')->references('idempleado')->on('tblempleados')->onDelete('CASCADE')->onCascade('CASCADE');
            $table->foreign('codservicio')->references('idservicio')->on('tblservicios')->onDelete('CASCADE')->onCascade('CASCADE');
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
        Schema::dropIfExists('tblempleadosservicios');
    }
}
