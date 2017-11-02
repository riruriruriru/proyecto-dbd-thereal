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
            $table->increments('id_trabajo')->unique();
            $table->integer('id_tipo_trabajo_trabajo')->foreign('id_tipo_trabajo_trabajo')->references('id_tipo_trabajo')->on('TipoTrabajo');
            $table->integer('id_rnv_trabajo')->foreign('id_rnv_trabajo')->references('id_rnv')->on('RNV');
            $table->string('tipo_trabajo',30);
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
