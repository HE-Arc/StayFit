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
    return [
        'pseudo' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'size' => random_int(100, 300),
        'weight' => random_int(40, 200),
        'birth_date' => $faker->date('d-m-Y'),
        'gender' => $faker->word,
        'bmi' => random_int(100, 300),
    ];
});
$factory->define(App\Activity::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'coefficient' => random_int(0, 10),
    ];
});