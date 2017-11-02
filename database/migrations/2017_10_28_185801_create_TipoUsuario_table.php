<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TipoUsuario', function (Blueprint $table) {
            $table->index('id_tipo');
            $table->integer('id_tipo')->nullable($value = false)->primary();
            $table->string('descripcion', 100);
            $table->string('nombre_tipo',10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TipoUsuario');
    }
}
