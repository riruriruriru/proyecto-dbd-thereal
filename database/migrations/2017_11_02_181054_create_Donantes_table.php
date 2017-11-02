<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Donantes', function (Blueprint $table) {
            $table->increments('id_donante');
            $table->int('id_donacion_donante');
            $table->foreign('id_donacion_donante')->references('id_donacion')->on('Donacion');
            $table->string('email_donante');
            $table->foreign('email_donante')->references('email')->on('Usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Donantes');
    }
}
