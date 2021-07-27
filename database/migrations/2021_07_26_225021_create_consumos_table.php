<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumos', function (Blueprint $table) {
            $table->integerIncrements('idConsumo');
            $table->integer('idAbonado')->unsigned();
            $table->integer('idServicio')->unsigned();
            $table->string('idCategoria', 2);
            $table->date('idPeriodo');
            $table->integer('idLectura')->unsigned();
            $table->integer('idControl')->unsigned()->default(0);
            $table->integer('idLey1886')->unsigned()->default(0);
            $table->integer('conDias');
            $table->float('conImpFijo');
            $table->float('conImpAdic');
            $table->float('conImpSupe');
            $table->float('conImpDemanda');
            $table->float('conImpTotal');
            $table->float('conImpConexion');
            $table->float('conImpReconex');
            $table->float('conImpAseo');
            $table->float('conImpAlumbrado');
            $table->float('conImpAfcoop');
            $table->float('conImpRecargo');
            $table->float('conImpMantiene');
            $table->float('conImpRepone');
            $table->float('conImpDevolucion');
            $table->float('conImpLey18861');
            $table->float('conImp18862');
            $table->float('conImpDignidad1');
            $table->float('conImpDignidad2');
            $table->float('conImpDesdom');
            $table->float('conImpDesau');
            $table->float('conImpDesAfcoop');
            $table->float('conFechaPago');
            $table->date('conFechaPagp');
            $table->date('conFecha');
            $table->string('conUsuario', 15);
            $table->timestamps();
            $table->foreign('idAbonado', 'idServicio')->references('idAbonado', 'idServicio')->on('abonados');
            $table->foreign('idCategoria')->references('idCategoria')->on('categorias');
            $table->foreign('idPeriodo')->references('idPeriodo')->on('periodos');
            $table->foreign('idControl')->references('idControl')->on('controles');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consumos');
    }
}
