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
        'password' => bcrypt("pass1234"),
        'size' => random_int(100, 300),
        'weight' => random_int(40, 200),
        'birth_date' => $faker->date('Y-m-d'),
        'gender' => "M",
        'bmi' => random_int(100, 300),
    ];
});
$factory->define(App\Session::class, function (Faker\Generator $faker)
{
    $actIDS=collect(\App\Activity::pluck('id'));
    $userIDS=collect(\App\User::pluck('id'));
    return[
        'user_id'=>$userIDS->random(),
        'duration'=>$faker->dateTime,
        'date'=>$faker->dateTimeThisYear,
//        'activity_id'=>random_int(1,3),
        'activity_id'=>$actIDS->random(),
        'distance'=>rand(0,30)+rand(0,10)/10,
        'footsteps'=>rand(1,10000),
        'calories'=>rand(100,10000),
        'geometry'=>[[$faker->latitude,$faker->longitude],[$faker->latitude,$faker->longitude]],
//        'geometry'=>"[[20.4567,67.4467],[20.4560,67.4468],[20.4562,67.4464]]",
    ];
});