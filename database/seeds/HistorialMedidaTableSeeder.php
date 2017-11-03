<?php

use Illuminate\Database\Seeder;

class HistorialMedidaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = factory('App\HistorialMedidas')->create();
    }
}
