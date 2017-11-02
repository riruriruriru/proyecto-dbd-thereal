<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoluntarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Voluntario', function (Blueprint $table) {
            $table->increments('id_voluntario')->unique();
            $table->integer('id_evento_voluntario')->foreign('id_evento_voluntario')->references('id_evento')->on('Evento');
            $table->integer('id_voluntariado_voluntario')->foreign('id_voluntariado_voluntario')->references('id_voluntariado')->on('Voluntariado');
            $table->string('nombre_voluntario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Voluntario');
    }
}
