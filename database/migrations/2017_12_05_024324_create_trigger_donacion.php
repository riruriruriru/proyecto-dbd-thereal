<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriggerDonacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()

    {

       /* DB::unprepared(
            'CREATE TRIGGER trigger_donation BEFORE UPDATE ON `Donacion` FOR EACH ROW
            BEGIN
                IF NEW.monto_actual> NEW.objetivo THEN
                   INSERT INTO `Donacion` (`monto_actual`) VALUES (OLD.monto_actual);
                END IF;
            END');*/
    }

    public function down()

    {

       /* DB::unprepared('DROP TRIGGER over_donation');*/

    }
}
