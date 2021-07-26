<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calles', function (Blueprint $table) {
            $table->integerIncrements('idCalle');
            $table->integer('idZona')->unsigned();
            $table->string('calDescripcion', 50);
            $table->date('calFecha');
            $table->string('calUsuario');
            $table->timestamps();
            $table->foreign('idZona')->references('idZona')->on('zonas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calles');
    }
}
