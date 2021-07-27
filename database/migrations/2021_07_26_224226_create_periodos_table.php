<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodos', function (Blueprint $table) {
            $table->date('idPeriodo')->primary();
            $table->date('emiVence');
            $table->date('emiMedicion');
            $table->date('emiEmision');
            $table->string('idStatus', 1);
            $table->date('emiFecStatus');
            $table->integer('emiProceso');
            $table->integer('emiActivado');
            $table->timestamps();
            $table->foreign('idStatus')->references('idStatus')->on('statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('periodos');
    }
}
