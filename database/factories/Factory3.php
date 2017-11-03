<?php

use Faker\Generator as Faker;

$factory->define(App\Ciudad::class, function (Faker $faker) {

    return [
        'nombre_ciudad' => $faker->state,
    ];
}
);
$factory->define(App\Comuna::class, function (Faker $faker) {

    return [
        'nombre_comuna' => $faker->city,
    ];
}
);
$factory->define(App\Region::class, function (Faker $faker) {


    return [
        'nombre_region' => $faker->state,
    ];
}
);
$factory->define(App\Lugar::class, function (Faker $faker) {
	$id_ciudad1 =  \DB::table('Ciudad')->select('id_ciudad')->get();
	$id_ciudad2 = $id_ciudad1->random()->id;
	$id_region1 = \DB::table('Region')->select('id_region')->get();
	$id_region2 = $id_region1->random()->id;
	$id_comuna1 = \DB::table('Comuna')->select('id_comuna')->get();
	$id_comuna2 = $id_comuna1->random()->id;
	$id_catastrofe1 = \DB::table('Catastrofe')->select('id_catastrofe')->get();
	$id_catastrofe2 = $id_catastrofe1->random()->id;
    return [
        'id_catastrofe' => $id_catastrofe2,
        'id_ciudad' => $id_ciudad2,
        'id_comuna' => $id_comuna2,
        'id_region' => $id_region2,
    ];
}
);
$factory->define(App\LugarCatastrofe::class, function (Faker $faker) {
	$id_catastrofe_lugar1 = \DB::table('Lugar')->select('id_lugar')->get();
	$id_catastrofe_lugar2 = $id_catastrofe_lugar1->random()->id;
	$id_lugarcatastrofe1 = \DB::table('Catastrofe')->select('id_catastrofe')->get();
	$id_lugarcatastrofe2 = $id_lugarcatastrofe1->random()->id;

    return [
        'id_catastrofe_lugarcatastrofe' => $id_catastrofe_lugar2,
        'id_lugar_catastrofe' => $id_lugarcatastrofe2,
    ];
}
);
$factory->define(App\HistorialCatastrofe::class, function (Faker $faker) {

    return [
			'cantidad_catastrofe' => rand(1,50),
            'cantidad_voluntarios' => rand(1, 50),
            'total_recaudado' => rand(1,50),
            'total_medidas' => rand(1,50),
            'numero_donaciones' => rand(1,50),
            'numero_organizaciones' => rand(1,50),
            'tipo_catastrofe_recurrente' => str_random(10),
            'lugar_mas_afectado' => $faker->city,
            ];
}
);
$factory->define(App\HistorialUsuario::class, function (Faker $faker) {

    return [
			'total_medidas' => rand(1,50),
            'total_donaciones' => rand(1, 50),
            'numero_participaciones' => rand(1,50),
 			];           
}
);
$factory->define(App\HistorialMedidas::class, function (Faker $faker) {

    return [
			'top_medida' => str_random(10),
            'total_recaudado' => rand(1, 50),
            'top_donante' => $faker->name,
            'top_actividad' => str_random(10),
            'numero_voluntarios' => rand(1,50),
            ];
}
);
$factory->define(App\HistoricalUser::class, function (Faker $faker) {
	$id_historial_usuario = \DB::table('HistorialUsuario')->select('id_historial_usuario')->get();
	$id_historial_usuario2 = $id_historial_usuario->random()->id;
	$email1 = \DB::table('Usuario')->select('email')->get();
	$email2 = $email1->random()->id;
    return [
    		$table->increments('id_historical'),
            $table->integer('id_historial_usuario'),
            $table->string('email',40),
            $table->foreign('email')->references('email')->on('Usuario'),
            $table->foreign('id_historial_usuario')->references('id_historial_usuario')->on('HistorialUsuario'),
            ];
}


);
