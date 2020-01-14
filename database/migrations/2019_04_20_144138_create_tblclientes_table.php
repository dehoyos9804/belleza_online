<?php


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblclientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblclientes', function (Blueprint $table) {
            $table->integer('idcliente')->unsigned();
            $table->primary('idcliente');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('telefonos');
            $table->string('direccion');
            $table->string('clave');
            $table->text('imagen');
            $table->date('fechanacimiento');
            $table->string('email');
            $table->string('api_token')->nullable();
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
        Schema::dropIfExists('tblclientes');
    }
}
