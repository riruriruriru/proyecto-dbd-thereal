<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Medidas', function (Blueprint $table) {
            $table->increments('id_medidas')->unique();
            $table->integer('id_catastrofe_medidas')->foreign('id_catastrofe_medidas')->references('id_catastrofe')->on('Catastrofe')->nullable();
            $table->integer('id_organizacion_medidas')->foreign('id_organizacion_medidas')->references('id_organizacion')->on('Organizacion');
            $table->string('nombre_medida',40);
            $table->integer('id_usuario')->foreign('id_usuario')->references('id')->on('user');
            $table->text('descripcion');
            $table->date('fecha_inicio_medida');
            $table->date('fecha_termino_medida');
            $table->boolean('publico')->nullable();
            $table->integer('id_historial')->foreign('id_historial')->references('id_historial')->on('HistorialCatastrofe')->nullable();

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
        Schema::dropIfExists('Medidas');
    }
}
