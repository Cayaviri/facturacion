<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscritoley1886sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscritoley1886s', function (Blueprint $table) {
            $table->integerIncrements('idInscrito');
            $table->integer('idLey1886')->unsigned();
            $table->integer('idAbonado')->unsigned();
            $table->integer('idServicio')->unsigned();
            $table->string('idCliente', 15);
            $table->string('idBeneficiario', 1);
            $table->date('insFecha');
            $table->string('insUsuario', 15);
            $table->timestamps();
            $table->foreign('idLey1886')->references('idLey1886')->on('ley1886s');
            $table->foreign('idAbonado')->references('idAbonado')->on('abonados');
            $table->foreign('idServicio')->references('idServicio')->on('servicios');
            $table->foreign('idCliente')->references('idCliente')->on('clientes');
            $table->foreign('idBeneficiario')->references('idBeneficiario')->on('beneficiarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscritoley1886s');
    }
}
