<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLey1886sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ley1886s', function (Blueprint $table) {
            $table->integerIncrements('idLey1886');
            $table->date('idInicio');
            $table->date('idCierre');
            $table->integer('leyAbierto');
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
        Schema::dropIfExists('ley1886s');
    }
}
