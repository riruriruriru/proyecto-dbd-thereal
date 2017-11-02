<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialCatastrofeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('HistorialCatastrofe', function (Blueprint $table) {
            $table->increments('id_historial');
            $table->integer('cantidad_catastrofe');
            $table->integer('cantidad_voluntarios');
            $table->integer('total_recaudado');
            $table->integer('total_medidas');
            $table->integer('numero_donaciones');
            $table->integer('numero_organizaciones');
            $table->string('tipo_catastrofe_recurrente',40);
            $table->string('lugar_mas_afectado',40);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('HistorialCatastrofe');
    }
}
