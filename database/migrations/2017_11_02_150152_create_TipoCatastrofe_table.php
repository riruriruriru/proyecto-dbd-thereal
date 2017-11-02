<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoCatastrofeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TipoCatastrofe', function (Blueprint $table) {
            $table->integer('id_tipo')->primary();
            $table->string('nombre_catastrofe', 20);
            $table->string('descripcion_catastrofe', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TipoCatastrofe');
    }
}
