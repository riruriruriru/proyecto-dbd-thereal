<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsumoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Insumo', function (Blueprint $table) {
            $table->increments('id_insumo');
            $table->interger('id_acopio_insumo')->foreign('id_acopio_isumo')->references('id_acopio')->on('CentroDeAcopio');
            $table->interger('id_tipo_insumo_insumo')->foreign('id_tipo_insumo_insumo')->references('id_tipo_insumo')->on('TipoInsumo');
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
        Schema::dropIfExists('Insumo');
    }
}
