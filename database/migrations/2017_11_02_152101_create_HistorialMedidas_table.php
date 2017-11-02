<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialMedidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('HistorialMedidas', function (Blueprint $table) {
            $table->increments('id_historial');
            $table->string('top_medida'),40;
            $table->integer('total_recaudado');
            $table->string('top_donante'),40;
            $table->string('top_actividad'),40;
            $table->integer('numero_voluntarios');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('HistorialMedidas');
    }
}
