<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Organizacion', function (Blueprint $table) {
            $table->increments('id_organizacion')->unique();
            $table->interger('id_tipo_beneficencia_organizacion')->foreign('id_tipo_beneficencia_organizacion')->references('id_tipo_beneficencia')->on('TipoBeneficiencia')
            $table->string('tipo_beneficiencia',40);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Organizacion');
    }
}
