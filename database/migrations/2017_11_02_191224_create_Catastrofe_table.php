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
            $table->text('lugar_catastrofe');
            $table->text('descripcion')->nullable();
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
