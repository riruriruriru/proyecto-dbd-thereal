<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRNVTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RNV', function (Blueprint $table) {
            $table->increments('id_rnv')->unique();
            $table->string('email',40);
            $table->integer('id_voluntario_RNV')->foreign('id_voluntario_RNV')->references('id_voluntario')->on('Voluntario');
            $table->boolean('disponibilidad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('RNV');
    }
}
