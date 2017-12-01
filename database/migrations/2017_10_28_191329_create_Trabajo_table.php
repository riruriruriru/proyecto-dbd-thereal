<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrabajoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::create('Trabajo', function (Blueprint $table) {
            $table->increments('id_trabajo');
            $table->text('nombre_trabajo');
            $table->integer('participantes_trabajo');
            $table->integer('trabajo_id_voluntariado')->foreign('id_voluntariado')->references('id_voluntariado')->on('Voluntariado');
            $table->string('tipo', 100);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Trabajo');
    }
}
