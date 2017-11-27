<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Donacion', function (Blueprint $table) {
            $table->increments('id_donacion')->unique();
            $table->integer('id_medidas_donacion')->foreign('id_medidas_donacion')->references('id_medidas')->on('Medidas');
            $table->integer('objetivo');
            $table->text('nombre');
            $table->integer('numero_cuenta');
            $table->integer('monto_actual');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Donacion');
    }
}
