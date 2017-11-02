<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComunaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Comuna', function (Blueprint $table) {
            $table->increments('id_comuna')->unique();
            $table->integer('id_lugar_comuna')->foreign('id_lugar_comuna')->references('id_lugar')->on('Lugar');
            $table->string('nombre_comuna');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Comuna');
    }
}
