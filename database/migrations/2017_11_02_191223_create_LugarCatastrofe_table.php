<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLugarCatastrofeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LugarCatastrofe', function (Blueprint $table) {
            $table->increments('id_lugarCatastrofe');
            $table->integer('id_catastrofe_lugarcatastrofe')->foreign('id_catastrofe_lugarcatastrofe')->references('id_catastrofe')->on('Catastrofe');
            $table->integer('id_lugar_catastrofe')->foreign('id_lugar_catastrofe')->references('id_lugar')->on('Lugar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('LugarCatastrofe');
    }
}
