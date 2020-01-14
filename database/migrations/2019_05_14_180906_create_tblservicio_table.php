<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblservicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblservicios', function (Blueprint $table) {
            $table->increments('idservicio');
            $table->string('nombreservicio');
            $table->text('descripcionservicio')->nullable();
            $table->integer('codtiposervicio')->unsigned();
            $table->foreign('codtiposervicio')->references('idtiposervicio')->on('tbltiposervicio')->onDelete('CASCADE')->onCascade('CASCADE');
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
        Schema::dropIfExists('tblservicios');
    }
}
