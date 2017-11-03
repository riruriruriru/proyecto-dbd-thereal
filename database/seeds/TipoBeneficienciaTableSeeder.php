<?php

use Illuminate\Database\Seeder;

class TipoBeneficienciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\TipoBeneficencia')->create();
    }
}
