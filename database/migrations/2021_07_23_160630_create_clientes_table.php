<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->string('idCliente', 15)->primary();
            $table->string('cliNombre', 60);
            $table->string('idDocumento', 3);
            $table->string('idEstadocivil', 1);
            $table->string('idSexo', 1);
            $table->date('cliNacimiento');
            $table->string('cliDireccion', 100);
            $table->string('cliTelefono', 15);
            $table->string('cliProfesion', 30);
            $table->string('cliOcupacion', 30);
            $table->string('cliEducacion', 30);
            $table->integer('cliDependientes');
            $table->string('cliNota', 100)->nullable();
            $table->date('cliFecha');
            $table->string('cliUsuario', 15);
            $table->timestamps();
            $table->foreign('idDocumento')->references('idDocumento')->on('documentos');
            $table->foreign('idEstadocivil')->references('idEstadocivil')->on('estadocivils');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
