<?php

use Illuminate\Database\Seeder;

class LugarCatastrofeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = factory('App\LugarCatastrofe')->create();
    }
}
