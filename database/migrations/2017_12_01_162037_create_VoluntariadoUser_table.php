<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoluntariadoUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('VoluntariadoUser', function (Blueprint $table) {
             $table->increments('id');
            $table->timestamps();
            $table->integer('id_trabajo')->foreign('id_trabajo')->references('id_trabajo')->on('Trabajo');
            $table->integer('id_user')->foreign('id_user')->references('id')->on('users');
            $table->integer('id_voluntariado')->foreign('id_voluntariado')->references('id_voluntariado')->on('Voluntariado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('VoluntariadoUser');
    }
}
