<?php

use Illuminate\Database\Seeder;
use App\Usuario;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Usuario')->delete();
        Usuario::create(['email' => 'foo@bar.com', 
            'id_tipo_usuario' => 1, 
            'nombre_usuario'=>'riruriru', 
            'apellido_usuario'=>'wapu', 
            'telefono_usuario'=>'11114444', 
            'password'=>'contrasenia'
            ]);
    }
}
