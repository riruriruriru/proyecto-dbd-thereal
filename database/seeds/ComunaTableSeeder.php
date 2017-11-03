<?php

use Illuminate\Database\Seeder;

class ComunaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = factory('App\Comuna')->create();
    }
}
