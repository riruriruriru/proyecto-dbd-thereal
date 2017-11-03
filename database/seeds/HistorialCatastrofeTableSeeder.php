<?php

use Illuminate\Database\Seeder;

class HistorialCatastrofeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = factory('App\HistorialCatastrofe')->create();
    }
}
