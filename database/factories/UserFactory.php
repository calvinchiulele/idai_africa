<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(\App\Models\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'phonenumber' => $faker->phoneNumber,
    ];
});


$factory->define(\App\Models\Volunteer::class, function (Faker $faker) {
    return [
        'status' => true,
        'districts_id' => $faker->numberBetween(1, \App\Models\District::all()->count()),
        'users_id' => $faker->numberBetween(1, 100)
    ];
});


$factory->define(\App\Models\Organization::class, function (Faker $faker) {
    return [
        'users_id' => $faker->numberBetween(101, \App\User::all()->count())
    ];
});

$factory->define(\App\Models\Province::class, function (Faker $faker) {

    $provincias = \App\Http\Controllers\DataController::getProvinvias();
    $provincia = $faker->unique()->randomElement($provincias);
    return [
        'id' => $provincia['id'],
        'name' => $provincia['name']
    ];
});

$distritos = \App\Http\Controllers\DataController::getDistritos();

$factory->define(\App\Models\District::class, function (Faker $faker) use ($distritos){

    $distrito = $distritos->pop();

    return [
        'name' => $distrito['name'],
        'provinces_id' => $distrito['in_place']['id']
    ];

});
