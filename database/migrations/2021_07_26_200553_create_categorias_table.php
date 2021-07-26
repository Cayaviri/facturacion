<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->string('idCategoria', 2)->primary();
            $table->string('catDescripcion', 50);
            $table->integer('idServicio')->unsigned();
            $table->date('catFecha');
            $table->string('catUsuario', 15);
            $table->timestamps();
            $table->foreign('idServicio')->references('idServicio')->on('servicios');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias');
    }
}
