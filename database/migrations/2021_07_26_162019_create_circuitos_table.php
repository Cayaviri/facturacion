<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCircuitosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('circuitos', function (Blueprint $table) {
            $table->integer('idCircuito')->unsigned()->primary();
            $table->string('cirDireccion', 30);
            $table->integer('cirLatitud');
            $table->integer('cirLongitud');
            $table->date('cirFecha');
            $table->string('cirUsuario', 15);
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
        Schema::dropIfExists('circuitos');
    }
}
