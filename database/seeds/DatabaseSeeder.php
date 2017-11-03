<?php

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DatabaseSeeder extends Seeder
{
    use RefreshDatabase;
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
        //$this->call('TipoActividadTableSeeder');
        //$this->call('TipoBeneficienciaTableSeeder');
        //$this->call('TipoCatastrofeTableSeeder');
        //$this->call('TipoInsumoTableSeeder');
        //$this->call('TipoTrabajoTableSeeder');
        factory('App\TipoActividad')->create();
        factory('App\TipoBeneficencia', 5)->create();
        factory('App\TipoCatastrofe')->create();
        factory('App\TipoInsumo', 5)->create();
        factory('App\TipoTrabajo', 5)->create();
        
        $post = factory('App\Usuario', 5)->create();
        $this->command->info('Factoria 1 seeded!');
    }
}
