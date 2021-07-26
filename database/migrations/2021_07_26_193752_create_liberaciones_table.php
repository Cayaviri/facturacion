<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLiberacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liberaciones', function (Blueprint $table) {
            $table->integer('idLiberacion')->unsigned()->primary();
            $table->string('libDescripcion', 30);
            $table->integer('idServicio')->unsigned();
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
        Schema::dropIfExists('liberaciones');
    }
}
