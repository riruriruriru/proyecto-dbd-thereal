<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Evento', function (Blueprint $table) {
            $table->increments('id_evento')->unique();
            $table->timestamps();
            $table->date('fecha_inicio_evento');
            $table->date('fecha_termino_evento');
            $table->integer('cantidad_voluntarios');
            $table->integer('voluntarios_actuales');
            $table->text('latitud');
            $table->text('longitud');
            $table->text('direccion');
            $table->text('descripcion');
            $table->text('nombre');
            $table->integer('monto_recaudado');
            $table->integer('monto_objetivo');
            $table->integer('id_medidas_evento')->foreign('id_medidas_evento')->references('id_medidas')->on('Medidas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Evento');
    }
}
