<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Student;
use Faker\Generator as Faker;

$factory->define(\App\Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'cpf' => $faker->numberBetween(10000000000, 99999999999),
        'rg'  => $faker->numberBetween(10000000000, 99999999999),
        'gender' => 'outro',
        'date_birth' => $faker->date,
        
        'phone' => $faker->phoneNumber,
        'email' => $faker->email,
        'obs' => $faker->sentence,
        'cep' => $faker->phoneNumber,
        'street' => $faker->streetName,
        'neighborhood' => $faker->name,
        'city'=> $faker->city,
        'state' => $faker->state,
        'deleted_at' => null,
    ];
});
