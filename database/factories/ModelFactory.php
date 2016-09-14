<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {

    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];

});


$factory->define(App\Example::class, function (Faker\Generator $faker) {

    return [
            'name' => $faker->name,
            'email' => $faker->email,
            'street' => $faker->streetName,
            'street2' => $faker->streetSuffix,
            'city' => $faker->region,
            'state' => 'ab',
            'number' => 12,
            'birthday'=> '1990-01-01',
            'postal' => '1234',
    ];

});
