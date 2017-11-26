<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRNVUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RNVUsers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_usuario')->foreign('id_usuario')->references('id')->on('users');

            $table->integer('id_rnv')->foreign('id_rnv')->references('id_rnv')->on('RNV');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('RNVUsers');
    }
}
