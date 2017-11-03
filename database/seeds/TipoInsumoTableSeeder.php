<?php

use Illuminate\Database\Seeder;

class TipoInsumoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = factory('App\TipoInsumo')->create();
    }
}
