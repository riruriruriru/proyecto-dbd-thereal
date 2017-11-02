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
            $table->integer('id_catastrofe_medidas')->foreign('id_catastrofe_medidas')->references('id_catastrofe')->on('Catastrofe');
            $table->integer('id_organizacion_medidas')->foreign('id_organizacion_medidas')->references('id_organizacion')->on('Organizacion');
            $table->string('email');
            $table->date('fecha_inicio_medida');
            $table->date('fecha_termino_medida');
            $table->boolean('publico');
            $table->increment('id_comentario_medida');
            $table->foreign('id_comentario_medida')->references('id_comentario')->on('comentario');
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
