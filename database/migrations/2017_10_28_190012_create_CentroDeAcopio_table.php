<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentroDeAcopioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CentroDeAcopio', function (Blueprint $table) {
            $table->increments('id_acopio')->unique();
            $table->integer('id_medidas_acopio')->foreign('id_medidas_acopio')->references('id_medidas')->on('Medidas');
            $table->string('nombre');
            $table->string('tipo_bien', 30);
            $table->text('direccion');
            $table->text('latitud');
            $table->text('longitud');
            $table->integer('cantidad_objetivo');
            $table->boolean('situacion');
            $table->boolean('recibe');
            $table->integer('monto_actual');
            $table->integer('monto_total');
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
        Schema::dropIfExists('CentroDeAcopio');
    }
}
