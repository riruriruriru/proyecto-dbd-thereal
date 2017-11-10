<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoricalUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('HistoricalUser', function (Blueprint $table) {
            $table->increments('id_historical');
            $table->integer('id_historial_usuario');
            $table->integer('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_historial_usuario')->references('id_historial_usuario')->on('HistorialUsuario');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('HistoricalUser');
    }
}
