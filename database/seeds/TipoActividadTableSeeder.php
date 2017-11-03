<?php

use Illuminate\Database\Seeder;

class TipoActividadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory('App\TipoActividad')->create();
    }
}
