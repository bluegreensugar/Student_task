<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Groups;
use Faker\Generator as Faker;
use App\Students;

$factory->define(Groups::class, function (Faker $faker) {
    $faker  = \Faker\Factory::create('ru_RU');
    return [
        'title'=>$faker->city,
        'description' =>$faker->unique()->word,
       
        'avg_math'=>rand(2, 5),
        'avg_prog'=>rand(2, 5),
        'avg_graf'=>rand(2, 5)
           
        

    ];
});
$factory->define(Students::class, function (Faker $faker) {
    $faker  = \Faker\Factory::create('ru_RU');
    return [
        'name'=>$faker->name,
        'birthday' =>$faker->date
        

    ];
});