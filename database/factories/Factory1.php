<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //

    ];
}
);
$factory->define(App\TipoUsuario::class, function (Faker $faker) {

    return [
        'id_tipo' => 1,
        'descripcion' => str_random(10),
        'nombre_tipo' => $faker->name,
    ];
}
);
$factory->define(App\TipoUsuario::class, function (Faker $faker) {

 
    return [
        'id_tipo' => 2,
        'descripcion' => str_random(10),
        'nombre_tipo' => $faker->name,
    ];
}
);
$factory->define(App\TipoTrabajo::class, function (Faker $faker) {

    return [
        'descripcion' => str_random(10),
    ];
}
);
$factory->define(App\TipoActividad::class, function (Faker $faker) {

    return [
        'descripcion' => str_random(10),
    ];
}
);
$factory->define(App\TipoBeneficencia::class, function (Faker $faker) {

    return [
        'descripcion' => $faker->text(),
        'nombre_tipo' => $faker->str_random(40),
    ];
}
);
$factory->define(App\TipoInsumo::class, function (Faker $faker) {

    return [
        'descripcion' => $faker->text(),
        'nombre_insumo' => str_random(40),
    ];
}
);
$factory->define(App\TipoCatastrofe::class, function (Faker $faker) {

    return [
        'nombre_catastrofe' => str_random(10),
        'descripcion_catastrofe' => str_random(10),
    ];
}


);
