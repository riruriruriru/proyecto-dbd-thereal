<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLugarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Lugar', function (Blueprint $table) {
            $table->increments('id_lugar')->unique();
            $table->integer('id_catastrofe')->foreign('id_catastrofe')->references('id_catastrofe')->on('Lugar');
            $table->integer('id_ciudad')->foreign('id_ciudad')->references('id_ciudad')->on('Ciudad');
            $table->integer('id_comuna')->foreign('id_comuna')->references('id_comuna')->on('Comuna');
            $table->integer('id_region')->foreign('id_region')->references('id_region')->on('Region');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Lugar');
    }
}
