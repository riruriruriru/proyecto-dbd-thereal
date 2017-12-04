<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
        public function up()

    {

        DB::unprepared(
            'CREATE TRIGGER over_donation BEFORE UPDATE OF 
            `monto_actual` ON `Donacion`
            BEGIN
                IF NEW.monto_actual> NEW.objetivo THEN
                   INSERT INTO `Donacion` (`monto_actual`) VALUES (OLD.monto_actual);
                END IF;
            END');
    }

    public function down()

    {

        DB::unprepared('DROP TRIGGER `over_donation`');

    }
}
