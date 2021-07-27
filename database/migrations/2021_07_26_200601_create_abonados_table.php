<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbonadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abonados', function (Blueprint $table) {
            $table->integer('idAbonado')->autoIncrement();
            $table->integer('idServicio')->unsigned();
            $table->string('idCliente', 15);
            $table->string('idCategoria', 2);
            $table->string('idLocalidad', 3);
            $table->integer('idCalle')->unsigned();
            $table->string('idPoste', 8);
            $table->string('idSuministro', 2);
            $table->string('idEstado', 1);
            $table->string('idConsumidor', 1);
            $table->string('idMedicion', 3);
            $table->integer('idLiberacion')->unsigned();
            $table->string('aboNumero', 5);
            $table->integer('aboCantidad');
            $table->date('aboAlta');
            $table->date('aboBaja');
            $table->string('aboMedidor', 20);
            $table->string('aboCapacidad', 10);
            $table->string('aboFase', 3);
            $table->float('aboPotencia');
            $table->float('aboMulmed');
            $table->integer('aboAfuera');
            $table->integer('aboListacorte');
            $table->integer('aboBloqueado');
            $table->integer('aboOdeco');
            $table->date('aboFecha');
            $table->string('aboUsuario', 15);
            $table->timestamps();
            $table->primary('idAbonado', 'idServicio');
            $table->foreign('idServicio')->references('idServicio')->on('servicios');
            $table->foreign('idCliente')->references('idCliente')->on('clientes');
            $table->foreign('idCategoria')->references('idCategoria')->on('categorias');
            $table->foreign('idLocalidad')->references('idLocalidad')->on('localidades');
            $table->foreign('idCalle')->references('idCalle')->on('calles');
            $table->foreign('idPoste')->references('idPoste')->on('postes');
            $table->foreign('idSuministro')->references('idSuministro')->on('suministros');
            $table->foreign('idEstado')->references('idEstado')->on('estados');
            $table->foreign('idConsumidor')->references('idConsumidor')->on('consumidores');
            $table->foreign('idMedicion')->references('idMedicion')->on('mediciones');
            $table->foreign('idLiberacion')->references('idLiberacion')->on('liberaciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abonados');
    }
}
