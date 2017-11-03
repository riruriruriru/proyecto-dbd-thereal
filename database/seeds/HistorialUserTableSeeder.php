<?php

use Illuminate\Database\Seeder;

class HistorialUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = factory('App\HistorialUsuario')->create();
    }
}
