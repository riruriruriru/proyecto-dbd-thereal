<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Comentario', function (Blueprint $table) {
            $table->increments('id_comentario');
            $table->string('email')->foreign('email')->references('email')->on('Usuario');
            $table->integer('id_medidas')->foreign('id_medidas')->references('id_medidas')->on('Medidas');
            $table->text('descripcion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Comentario');
    }
}
