<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbldetallescitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbldetallescitas', function (Blueprint $table) {
            $table->increments('iddetallecita');
            $table->integer('codservicio')-> unsigned();
            $table->integer('codcita')-> unsigned();
            $table->foreign('codservicio')->references('idservicio')->on('tblservicios')->onDelete('CASCADE')->onCascade('CASCADE');
            $table->foreign('codcita')->references('idcita')->on('tblcitas')->onDelete('CASCADE')->onCascade('CASCADE');
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
        Schema::dropIfExists('tbldetallescitas');
    }
}
