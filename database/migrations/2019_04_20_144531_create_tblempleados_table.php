<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblempleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblempleados', function (Blueprint $table) {
            $table->increments('idempleado');
            $table->integer('numerocedula');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('telefonos');
            $table->string('direccion');
            $table->string('email');
            $table->string('clave');
            $table->text('imagen');
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
        Schema::dropIfExists('tblempleados');
    }
}
