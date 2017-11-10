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
        'id_tipo' => rand(1,100),
        'descripcion' => str_random(10),
        'nombre_tipo' => $faker->name,
    ];
}
);

$factory->define(App\TipoTrabajo::class, function (Faker $faker) {

    return [
        'descripcion' => $faker->text(),
    ];
}
);
$factory->define(App\TipoActividad::class, function (Faker $faker) {

    return [
        'descripcion' => $faker->text(),
    ];
}
);
$factory->define(App\TipoBeneficencia::class, function (Faker $faker) {

    return [
        'descripcion' => $faker->text(),
        'nombre_tipo' => 'blabala',
    ];
}
);
$factory->define(App\TipoInsumo::class, function (Faker $faker) {

    return [
        'descripcion' => $faker->text(),
        'nombre_insumo' => str_random(10),
    ];
}
);
$factory->define(App\TipoCatastrofe::class, function (Faker $faker) {

    return [
        'nombre_catastrofe' => str_random(10),
        'descripcion_catastrofe' => $faker->text(),
    ];
}


);
