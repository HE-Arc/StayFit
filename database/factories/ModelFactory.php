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
        'name' => array('walk','run','bike')[random_int(0, 2)],
        'coefficient' => random_int(0,10),
    ];
});
$factory->define(App\Session::class, function (Faker\Generator $faker)
{
    return[
        'user_id'=>function(){
            return factory(App\User::class)->create()->id;
        },
        'duration'=>$faker->dateTime,
        'date'=>$faker->dateTimeThisYear,
        'activity_id'=>function(){
            return factory(App\Activity::class)->create()->id;
        },
        'distance'=>rand(0,30)+rand(0,10)/10,
        'footsteps'=>rand(1,10000),
        'calories'=>rand(100,10000),
        'geometry'=>"[[".$faker->latitude.",".$faker->longitude."],[".$faker->latitude.",".$faker->longitude."]]",
//        'geometry'=>"[[20.4567,67.4467],[20.4560,67.4468],[20.4562,67.4464]]",
    ];
});