<?php

use Illuminate\Database\Seeder;

class HistoricalUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = factory('App\HistoricalUser')->create();
    }
}
