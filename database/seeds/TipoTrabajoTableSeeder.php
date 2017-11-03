<?php

use Illuminate\Database\Seeder;

class TipoTrabajoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = factory('App\TipoTrabajo')->create();
    }
}
