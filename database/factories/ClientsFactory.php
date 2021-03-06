<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ClientsModel;
use Faker\Generator as Faker;

$factory->define(ClientsModel::class, function (Faker $faker) {
    return [
        'nom' => $faker->firstName(),
        'prenom' => $faker->lastname,
        'telephone' => $faker->e164PhoneNumber,
        'mail' => $faker->unique()->safeEmail,
    ];
});
