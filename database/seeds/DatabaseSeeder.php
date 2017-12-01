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

        
        ;
        DB::table('users')->delete();
        DB::table('RNV')->delete();
        DB::table('RNVUsers')->delete();
        DB::table('Habilidades')->delete();

                
        factory('App\User', 59)->create();
        factory('App\User', 'admin',1)->create();
        factory('App\User', 'gob',20)->create();
        factory('App\User', 'org1')->create();
        factory('App\User', 'org2')->create();
        factory('App\User', 'org3')->create();
        factory('App\User', 'org4')->create();
        factory('App\User', 'org5')->create();
        factory('App\User', 'org6')->create();
        factory('App\RNV')->create();
        factory('App\RNVUsers', 20)->create();
        factory('App\Habilidades', 'h1')->create();
        factory('App\Habilidades', 'h2')->create();
        factory('App\Habilidades', 'h3')->create();
        factory('App\Habilidades', 'h4')->create();
        factory('App\Habilidades', 'h5')->create();
        factory('App\Habilidades', 'h6')->create();
        factory('App\Habilidades', 'h7')->create();
        factory('App\Habilidades', 'h8')->create();
        factory('App\Habilidades', 'h9')->create();
        factory('App\Habilidades', 'h10')->create();
        factory('App\Habilidades', 'h11')->create();






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
