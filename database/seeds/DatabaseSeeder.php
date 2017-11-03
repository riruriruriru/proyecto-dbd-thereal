<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //$this->call('Factory1');
         //$this->call(Factory1::class);
        //$post = factory('App\TipoUsuario')->create();
        $this->call('TipoActividadTableSeeder');
        $this->call('TipoBeneficienciaTableSeeder');
        $this->call('TipoCatastrofeTableSeeder');
        $this->call('TipoInsumoTableSeeder');
        $this->call('TipoTrabajoTableSeeder');
        $this->command->info('Factoria 1 seeded!');
    }
}
