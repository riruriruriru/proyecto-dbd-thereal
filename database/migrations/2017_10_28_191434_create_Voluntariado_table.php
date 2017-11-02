<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoluntariadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Voluntariado', function (Blueprint $table) {
            $table->increments('id_voluntariado')->unique();
            $table->integer('id_medidas_voluntariado')->foreign('id_medidas_voluntariado')->references('id_medidas')->on('Medidas');
            $table->integer('voluntarios_objetivo');
            $table->integer('voluntarios_actual');
            $table->date('fecha_voluntariado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Voluntariado');
    }
}
