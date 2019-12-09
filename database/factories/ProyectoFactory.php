<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Proyecto;
use Faker\Generator as Faker;

$factory->define(Proyecto::class, function (Faker $faker) {
    return [
        'nombre' => Str::random(10),
        'titulo' => Str::random(20),
        'fechainicio' => $fechainicio,
        'fechafin'  => $fechafin,
        'horasestimadas' => rand(500,3000)
    ];
});
