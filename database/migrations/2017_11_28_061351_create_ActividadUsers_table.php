<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ActividadUsers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_actividad')->foreign('id_actividad')->references('id_actividad')->on('Actividad');
            $table->integer('id_user')->foreign('id_user')->references('id')->on('users');
            $table->integer('id_evento')->foreign('id_evento')->references('id_evento')->on('Evento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ActividadUsers');
    }
}
