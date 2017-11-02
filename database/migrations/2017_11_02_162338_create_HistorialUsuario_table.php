<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('HistorialUsuario', function (Blueprint $table) {
            $table->increments('id_historial_usuario');
            $table->integer('total_medidas');
            $table->integer('total_donaciones');
            $table->integer('numero_participaciones');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('HistorialUsuario');
    }
}
