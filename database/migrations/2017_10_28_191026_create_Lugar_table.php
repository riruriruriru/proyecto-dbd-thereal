<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLugarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Lugar', function (Blueprint $table) {
            $table->increments('id_lugar')->unique();
            $table->integer('id_catastrofe_lugar')->foreign('id_catastrofe_lugar')->references('id_catastrofe')->on('Lugar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Lugar');
    }
}
