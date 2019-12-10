<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Proyecto;
use Faker\Generator as Faker;

$factory->define(Proyecto::class, function (Faker $faker) {
    return [
        'nombre' => $faker->domainWord,
        'titulo' => $faker->catchPhrase,
        'fechainicio' => $faker->dateTime($min='now',$timezone='UTC'),
        'fechafin'  => $faker->dateTime($min='now',$timezone='UTC'),
        'horasestimadas' => $faker->numberBetween(500,10000)
    ];
});
