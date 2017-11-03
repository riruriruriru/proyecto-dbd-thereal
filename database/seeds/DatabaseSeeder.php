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

        
        DB::table('TipoActividad')->delete();
        DB::table('TipoBeneficencia')->delete();
        DB::table('TipoCatastrofe')->delete();
        DB::table('TipoInsumo')->delete();
        DB::table('TipoTrabajo')->delete();
        DB::table('Usuario')->delete();
        DB::table('TipoUsuario')->delete();
        factory('App\TipoActividad')->create();
        factory('App\TipoBeneficencia', 5)->create();
        factory('App\TipoCatastrofe')->create();
        factory('App\TipoInsumo', 5)->create();
        factory('App\TipoTrabajo', 5)->create();
        factory('App\TipoUsuario')->create();
        factory('App\Usuario', 5)->create();

//<<<<<<< Updated upstream
        //factory('App\TipoActividad')->create();
        //factory('App\TipoBeneficencia', 5)->create();
        //factory('App\TipoCatastrofe')->create();
        //factory('App\TipoInsumo', 5)->create();
        //factory('App\TipoTrabajo', 5)->create();
        
        //$post = factory('App\Usuario', 5)->create();
//=======
        //$this->call('CiudadTableSeeder');
        //$this->call('ComunaTableSeeder');
        //$this->call('RegionTableSeeder');
        //$this->call('HistorialCatastrofeTableSeeder');

        //$this->call('HistorialMedidaTableSeeder');
        //$this->call('HistorialUserTableSeeder');


        //$this->call('LugarTableSeeder');

        //$this->call('LugarCatastrofeTableSeeder');
        //$this->call('HistoricalUserTableSeeder');

        //factory('App\Medidas')->create();

        //factory('App\Organizacion')->create();

        //factory('App\Insumo')->create();

        //factory('App\RNV')->create();

        //factory('App\CentroDeAcopio')->create();


        //factory('App\Trabajo')->create();
        //factory('App\Catastrofe')->create();

        //factory('App\Actividad')->create();

        //factory('App\Donantes')->create();
        //factory('App\Comentario')->create();
        //factory('App\Voluntario')->create();

        //factory('App\Voluntariado')->create();




//>>>>>>> Stashed changes
//>>>>>>> Stashed changes
        $this->command->info('Factoria 1 seeded!');
    }
}
