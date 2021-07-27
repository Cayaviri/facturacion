<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLecturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecturas', function (Blueprint $table) {
            $table->integerIncrements('idLectura');
            $table->integer('idAbonado')->unsigned();
            $table->integer('idServicio')->unsigned();
            $table->date('idPeriodo');
            $table->integer('idControl')->unsigned();
            $table->integer('lecLecActual');
            $table->integer('lecLecAntes');
            $table->integer('lecKwh');
            $table->float('lecPotencia');
            $table->integer('lecKwhFacturado');
            $table->string('lecNota', 15)->nullable();
            $table->string('lecTecnico', 15);
            $table->date('lecFecha');
            $table->timestamps();
            $table->foreign('idPeriodo')->references('idPeriodo')->on('periodos');
            //$table->foreign('idAbonado', 'idServicio')->references('idAbonado', 'idServicio')->on('abonados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lecturas');
    }
}
