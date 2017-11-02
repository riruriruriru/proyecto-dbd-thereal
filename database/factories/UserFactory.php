<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
}


$factory->define(App\Usuario::class, function (Faker $faker) {
		$id_user = \DB::table('TipoUsuario')->select('id_tipo_usuario')->get();
		$id_user2 = $id_user->random()->id;
    return [

        'email' => $faker->unique()->safeEmail,
        'id_tipo_usuario' => $id_user2,
        'nombre_usuario' => $faker->name,
        'apellido_usuario' => $faker->name,
        'telefono_usuario' => $faker->phoneNumber,
        'password' => $password ?: $password = bcrypt('secret'),
    ];
}


$factory->define(App\Medida::class, function (Faker $faker) {
	$id_cat = \DB::table('Catastrofe')->select('id_catastrofe')->get();
	$id_cat2 = $id_cat->random()->id;
	$email = \DB::table('Usuario')->select('email')->get();
	$email2 = $email->random()->id;
	$id_hist = \DB::table('HistorialCatastrofe')->select('id_historial')->get();
	$id_hist2 = $id_hist->random()->id;
		
    return [

        'id_catastrofe_medidas' => $id_cat2,
        'email' => $email2,
        'fecha_inicio_medida' => $faker->dateTime,
        'fecha_termino_medida' =>  $faker->dateTime,
        'publico' => true,
        'id_historial' => $id_hist2,
    ];
}


$factory->define(App\Organizacion::class, function (Faker $faker) {
	$id_tipobene = \DB::table('TipoBeneficiencia')->select('id_tipo_beneficencia')->get();
	$id_tipobene2 = $id_tipobene->random()->id;
	
    return [

        'id_tipo_beneficencia' => $id_tipobene2,
        'tipo_beneficiencia' => $faker->name,
    ];
}


$factory->define(App\Insumo::class, function (Faker $faker) {
	$id_acopio_insumo = \DB::table('CentroDeAcopio')->select('id_acopio')->get();
	$id_acopio_insumo2 = $id_acopio_insumo->random()->id;
	$id_tipo_insumo = \DB::table('TipoInsumo')->select('id_tipo_insumo')->get();
	$id_tipo_insumo2 = $id_tipo_insumo->random()->id;
	
    return [

        'id_acopio_insumo' => $id_acopio_insumo2,
        'id_tipo_insumo_insumo' => $id_tipo_insumo2,
    ];
}


$factory->define(App\RNV::class, function (Faker $faker) {
	$emailR = \DB::table('Usuario')->select('email')->get();
	$emailR2 = $emailR->random()->id;

    return [

        'email' => $emailR2,
        'disponibilidad' => true,
    ];
}


$factory->define(App\CentroDeAcopio::class, function (Faker $faker) {
	$id_medacop = \DB::table('Medidas')->select('id_medidas')->get();
	$id_medacop = $id_medacop->random()->id;

    return [

        'id_medidas_acopio' => $id_medacop,
        'tipo_bien' => str_random(30),
        'direccion' => str_random(30),
        'cantidad_objetivo' => rand(1,50),
        'situacion' => true,
        'recibe' => true,
    ];
}


$factory->define(App\Trabajo::class, function (Faker $faker) {
	$id_tipotrabtrab = \DB::table('TipoTrabajo')->select('id_tipo_trabajo')->get();
	$id_tipotrabtrab2 = $id_tipotrabtrab->random()->id;
	$id_rnvtrab = \DB::table('RNV')->select('id_rnv')->get();
	$id_rnvtrab2 = $id_rnvtrab->random()->id;

    return [

        'id_tipo_trabajo' => $id_tipotrabtrab2,
        'id_rnv_trabajo' => $id_rnvtrab2,
        'tipo_trabajo' => str_random(30),
    ];
}


);