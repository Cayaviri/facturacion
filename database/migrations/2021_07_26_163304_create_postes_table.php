<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postes', function (Blueprint $table) {
            $table->string('idPoste', 8)->primary();
            $table->integer('idCalle')->unsigned();
            $table->integer('idCircuito')->unsigned();
            $table->integer('posVanos');
            $table->integer('posLatitud');
            $table->integer('posLongitud');
            $table->integer('posDistancia');
            $table->date('posFecha');
            $table->string('posUsuario');
            $table->timestamps();
            $table->foreign('idCalle')->references('idCalle')->on('calles');
            $table->foreign('idCircuito')->references('idCircuito')->on('circuitos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postes');
    }
}
