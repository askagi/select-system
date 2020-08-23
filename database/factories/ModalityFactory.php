<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Modality::class, function (Faker $faker) {
    return [
        /*'name' => $faker->jobTitle,
        //'photo' =>$faker->sentence,
        'description' => $faker->sentence,
        'price' => $faker->randomFloat(2, 60, 200),
        'class_week' => $faker->randomDigitNotNull,    */    
    ];
});
