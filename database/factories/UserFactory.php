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
    static $password='123456';

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('123456'),
        'remember_token' => str_random(10),
        'id_tipo_usuario' => '4',
        'last_name' => $faker->name,
    ];
}
);

$factory->define(App\RNV::class, function (Faker $faker) {
    return [
        'disponibilidad' => 'true',

    ];
}
);

$factory->define(App\RNVUsers::class, function (Faker $faker) {
    $id_medacop = \DB::table('users')->select('id')->where('id_tipo_usuario', '=', 4)->get();
    $id_tipo_u = $id_medacop->random()->id;
    $id_rnv = \DB::table('RNV')->select('id_rnv')->get();
    $id_r = $id_rnv->random()->id_rnv;
    return [
        'id_rnv' => $id_r,
        'id_usuario' => $id_tipo_u,

    ];
}
);



$factory->defineAs(App\User::class, 'admin',function (Faker $faker) {
static $password='123456';
    return [
        'name' => 'superAdmin',
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('123456'),
        'remember_token' => str_random(10),
        'id_tipo_usuario' => '1',
        'last_name' => 'superAdmin',
    ];
}
);

$factory->defineAs(App\User::class, 'gob',function (Faker $faker) {
static $password='123456';
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('123456'),
        'remember_token' => str_random(10),
        'id_tipo_usuario' => '2',
        'last_name' => 'Gobierno de Chile',
    ];
}
);


$factory->defineAs(App\User::class, 'org1',function (Faker $faker) {
static $password='123456';
    return [
        'name' => 'Teleton',
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('123456'),
        'remember_token' => str_random(10),
        'id_tipo_usuario' => '3',
        'last_name' => 'Organizacion',
    ];
}
);

$factory->defineAs(App\User::class, 'org2',function (Faker $faker) {
static $password='123456';
    return [
        'name' => 'Techo Para Chile',
        'email' => $faker->unique()->safeEmail,
        'password' =>bcrypt('123456'),
        'remember_token' => str_random(10),
        'id_tipo_usuario' => '3',
        'last_name' => 'Organizacion',
    ];
}
);

$factory->defineAs(App\User::class, 'org3',function (Faker $faker) {
static $password='123456';
    return [
        'name' => 'Greenpeace',
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('123456'),
        'remember_token' => str_random(10),
        'id_tipo_usuario' => '3',
        'last_name' => 'Organizacion',
    ];
}
);

$factory->defineAs(App\User::class, 'org4',function (Faker $faker) {
static $password='123456';
    return [
        'name' => 'Moviliza',
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('123456'),
        'remember_token' => str_random(10),
        'id_tipo_usuario' => '3',
        'last_name' => 'Organizacion',
    ];
}
);
$factory->defineAs(App\User::class, 'org5',function (Faker $faker) {
static $password='123456';
    return [
        'name' => 'Hogar de Cristo',
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('123456'),
        'remember_token' => str_random(10),
        'id_tipo_usuario' => '3',
        'last_name' => 'Organizacion',
    ];
}
);
$factory->defineAs(App\User::class, 'org6',function (Faker $faker) {
static $password='123456';
    return [
        'name' => 'Fundacion Superacion de la Pobreza',
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('123456'),
        'remember_token' => str_random(10),
        'id_tipo_usuario' => '3',
        'last_name' => 'Organizacion',
    ];
}
);



$factory->define(App\Usuario::class, function (Faker $faker) {
		$id_user = \DB::table('TipoUsuario')->select('id_tipo')->get();
		$id_user2 = $id_user->random()->id_tipo;
    return [

        'email' => $faker->unique()->safeEmail,
        'id_tipo_usuario' => $id_user2,
        'nombre_usuario' => $faker->name,
        'apellido_usuario' => $faker->name,
        'telefono_usuario' => $faker->phoneNumber,
        'password' => str_random(5),
    ];
}
);


$factory->define(App\Medidas::class, function (Faker $faker) {
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
);


$factory->define(App\Organizacion::class, function (Faker $faker) {
	$id_tipobene = \DB::table('TipoBeneficencia')->select('id_tipo_beneficencia')->get();
	$id_tipobene2 = $id_tipobene->random()->id_tipo_beneficencia;
	
    return [

        'id_tipo_beneficencia' => $id_tipobene2,
        'nombre_tipo' => $faker->name,
    ];
}
);


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
);



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
);


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



$factory->define(App\Catastrofe::class, function (Faker $faker) {
	$id_tipocatastrofe = \DB::table('TipoCatastrofe')->select('id_tipo_catastrofe')->get();
	$id_tipocatastrofe2 = $id_tipocatastrofe->random()->id;

    return [

        'tipo_catastrofe' => $id_tipocatastrofe2,
        'fecha_inicio' => $faker->dateTime,
        'fecha_termino' => $faker->dateTime,
    ];
}
);



$factory->define(App\Actividad::class, function (Faker $faker) {
	$actividadidevento = \DB::table('Evento')->select('id_evento')->get();
	$actividadidevento2 = $actividadidevento->random()->id;

    return [

        'actividad_id_evento' => $actividadidevento2,
        'tipo' => str_random(100),
    ];
}
);



$factory->define(App\Donacion::class, function (Faker $faker) {
	$id_medon = \DB::table('Medidas')->select('id_medidas')->get();
	$id_medon2 = $id_medon->random()->id;

    return [

    	'id_medidas_donacion' => $id_medon2,
        'objetivo' => $faker->rand(1,50),
        'numero_cuenta' => $faker->rand(1,50),
    ];
}
);


$factory->define(App\Evento::class, function (Faker $faker) {
	$id_medeven = \DB::table('Medidas')->select('id_medidas')->get();
	$id_medeven2 = $id_medeven->random()->id;
	
    return [

    	'fecha_inicio_evento' => $faker->dateTime,
    	'fecha_termino_evento' => $faker->dateTime,
    	'cantidad_voluntarios' => $faker->rand(1,100),
    	'monto_recaudado' => $faker->rand(1,1000),
    	'id_medidas_evento' => $id_medeven2,
    ];
}
);


$factory->define(App\Donantes::class, function (Faker $faker) {
	$id_donacion = \DB::table('Donacion')->select('id_donacion')->get();
	$id_donacion2 = $id_donacion->random()->id;
	$emaildonante = \DB::table('Usuario')->select('email')->get();
	$emaildonante2 = $emaildonante->random()->id;
	
    return [

    	'id_donacion_donante' => $id_donacion2,
    	'email_donante' => $emaildonante2,
    ];
}
);


$factory->define(App\Comentario::class, function (Faker $faker) {
	$emailcoment = \DB::table('Usuario')->select('email')->get();
	$emailcoment2 = $emailcoment->random()->id;
	$id_comed = \DB::table('Medidas')->select('id_medidas')->get();
	$id_comed2 = $id_comed->random()->id;
	
    return [

    	'email' => $emailcoment2,
    	'id_medidas' => $id_comed2,
    	'descripcion' => $faker->text(),
    ];
}
);


$factory->define(App\Voluntario::class, function (Faker $faker) {
	$id_evolun = \DB::table('Evento')->select('id_evento')->get();
	$id_evolun2 = $id_evolun->random()->id;
	$id_volvol = \DB::table('Voluntariado')->select('id_voluntariado')->get();
	$id_volvol2 = $id_volvol->random()->id;
	$id_rnvol = \DB::table('RNV')->select('id_rnv')->get();
	$id_rnvol2 = $id_rnvol->random()->id;
	
    return [

    	'id_evento_voluntario' => $evolun2,
    	'id_voluntariado_voluntario' => $id_volvol2,
    	'id_rnv_voluntario' => $id_rnvol2,
    	'nombre_voluntario' => $faker->str_random(20),
    ];
}
);



$factory->define(App\Voluntariado::class, function (Faker $faker) {
	$id_medvol = \DB::table('Medidas')->select('id_medidas')->get();
	$id_medvol2 = $id_medvol->random()->id;
	
    return [

    	'id_medidas_voluntariado' => $id_medvol2,
    	'voluntarios_objetivo' => $faker->rand(1,50),
    	'fecha_voluntariado' => $faker->dateTime,
    ];
}

);