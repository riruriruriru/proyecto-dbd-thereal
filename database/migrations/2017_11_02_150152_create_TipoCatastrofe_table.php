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
            $table->increment('id_tipo_catastrofe')->primary();
            $table->string('nombre_catastrofe', 40);
            $table->text('descripcion_catastrofe');
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
