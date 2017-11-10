<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatastrofeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Catastrofe', function (Blueprint $table) {
            $table->increments('id_catastrofe')->unique();
            $table->timestamps();
            $table->integer('tipo_catastrofe');
            $table->foreign('tipo_catastrofe')->references('id_tipo_catastrofe')->on('TipoCatastrofe');
            $table->integer('id_region')->foreign('id_region')->references('id_region')->on('Region');
            $table->integer('id_comuna')->foreign('id_comuna')->references('id_comuna')->on('Comuna');
            $table->integer('id_ciudad')->foreign('id_ciudad')->references('id_ciudad')->on('Ciudad');
            $table->date('fecha_inicio');
            $table->date('fecha_termino');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Catastrofe');
    }
}
