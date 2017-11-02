<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCiudadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Ciudad', function (Blueprint $table) {
            $table->increments('id_ciudad')->unique();
            $table->integer('id_lugar_ciudad')->foreign('id_lugar_ciudad')->references('id_lugar')->on('Lugar');
            $table->string('nombre_ciudad',30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Ciudad');
    }
}
