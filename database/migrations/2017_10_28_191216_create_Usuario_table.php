<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Usuario', function (Blueprint $table) {
            $table->string('email', 40)->primary();
            $table->integer('id_tipo_usuario');
            $table->foreign('id_tipo_usuario')->references('id_tipo')->on('TipoUsuario');
            $table->string('nombre_usuario',40);
            $table->string('apellido_usuario',40);
            $table->string('telefono_usuario',40);
            $table->string('password',40);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Usuario');
    }
}
