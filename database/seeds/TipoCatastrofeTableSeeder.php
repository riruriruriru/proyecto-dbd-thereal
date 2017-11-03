<?php

use Illuminate\Database\Seeder;

class TipoCatastrofeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = factory('App\TipoCatastrofe')->create();
    }
}
