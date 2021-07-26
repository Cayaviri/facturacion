<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zonas', function (Blueprint $table) {
            $table->integerIncrements('idZona');
            $table->string('idLocalidad', 3);
            $table->string('zonDescripcion', 50);
            $table->date('zonFecha');
            $table->string('zonUsuario', 15);
            $table->timestamps();
            $table->foreign('idLocalidad')->references('idLocalidad')->on('localidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zonas');
    }
}
