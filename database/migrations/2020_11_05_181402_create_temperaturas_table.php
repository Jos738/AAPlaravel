<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemperaturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temperaturas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('grados',2,1);
            $table->unsignedInteger('id_personas');
            $table->date('fecha');
            $table->foreign('id_personas')->references('id')->on('personas');
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
        Schema::dropIfExists('temperaturas');
    }
}
