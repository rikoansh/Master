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

$factory->defineAs(App\User::class, 'admin',function (Faker\Generator $faker) {
    return [
        'name' => 'admin',
        'email' => 'admin@localhost.com',
         'status' => 'Admin',
        'password' => bcrypt('admin'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\User::class, function (Faker\Generator $faker) {
    $status = ['Mahasiswa','Admin'];
    $s = $status[array_rand($status)];
    return [

        'name' => $faker->name,
        'email' => $faker->email,
        'status' => $s,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Berita::class, function (Faker\Generator $faker) {
    return [
        'judul' => ucfirst($faker->word),
        'slug' => $faker->slug,
        'isi' => $faker->text($maxNbChars=1000),
        'no' => $faker->numberBetween($min = 1, $max = 11)
    ];
});