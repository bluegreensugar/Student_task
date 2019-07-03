<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Groups;
use Faker\Generator as Faker;

$factory->define(Groups::class, function (Faker $faker) {
    $faker  = \Faker\Factory::create('ru_RU');
    return [
        'title'=>$faker->city,
        'description' =>$faker->unique()->word

    ];
});
/*$factory->define(Groups::class, function (Faker $faker) {
    $faker  = \Faker\Factory::create('ru_RU');
    return [
        'title'=>$faker->city,
        'description' =>$faker->unique()->word

    ];
});*/