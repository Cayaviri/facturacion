<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsumidoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumidores', function (Blueprint $table) {
            $table->string('idConsumidor', 1);
            $table->integer('idServicio')->unsigned();
            $table->string('conDescripcion', 30);
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
        Schema::dropIfExists('consumidores');
    }
}
