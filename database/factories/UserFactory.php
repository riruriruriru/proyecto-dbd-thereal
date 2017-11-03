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
);
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes

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
);
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes

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
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes

$factory->define(App\Organizacion::class, function (Faker $faker) {
	$id_tipobene = \DB::table('TipoBeneficiencia')->select('id_tipo_beneficencia')->get();
	$id_tipobene2 = $id_tipobene->random()->id;
	
    return [

        'id_tipo_beneficencia' => $id_tipobene2,
        'tipo_beneficiencia' => $faker->name,
    ];
}
);
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes

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
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes

$factory->define(App\RNV::class, function (Faker $faker) {
	$emailR = \DB::table('Usuario')->select('email')->get();
	$emailR2 = $emailR->random()->id;

    return [

        'email' => $emailR2,
        'disponibilidad' => true,
    ];
}
);
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes

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
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes

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
        'objetivo' => $faker->rand(1,50);
        'numero_cuenta' => $faker->rand(1,50);
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