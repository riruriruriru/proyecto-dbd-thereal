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
            $table->timestamps();
            $table->date('fecha_inicio_voluntariado');
            $table->date('fecha_termino_voluntariado');
            $table->integer('cantidad_voluntarios');
            $table->integer('voluntarios_actuales');
            $table->text('latitud');
            $table->text('longitud');
            $table->text('direccion');
            $table->text('descripcion');
            $table->text('nombre');
            $table->boolean('verificador')->nullable();
            $table->integer('id_medidas_voluntariado')->foreign('id_medidas_voluntariado')->references('id_medidas')->on('Medidas');
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
