<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Region', function (Blueprint $table) {
            $table->increments('id_region')->unique();
            $table->integer('id_lugar_region')->foreign('id_lugar_region')->references('id_lugar')->on('Lugar');
            $table->string('nombre_region',30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Region');
    }
}
