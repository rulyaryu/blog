<?php

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

// $factory->define(App\User::class, function (Faker $faker) {
//     return [
//         'name' => $faker->name,
//         'email' => $faker->unique()->safeEmail,
//         'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
//         'remember_token' => str_random(10),
//     ];
// });


$factory->define(App\News::class, function (Faker $faker) {
    return [
        'authors_id' => $faker->numberBetween(1,50),
        'title' => $faker->sentence(),
        'lead' => $faker->paragraph(),
        'content' => '<p>' . $faker->text() . '</p>',
        'slug' => str_slug($faker->sentence()),
        'viewsCount' => $faker->numberBetween(1,5000)
    ];
});

$factory->define(App\Authors::class, function (Faker $faker) {
    return [
        'name' => $faker->name()
    ];
});

$factory->define(App\Categories::class, function (Faker $faker) {
    return [
        'title' => $faker->word()
    ];
});

$factory->define(App\Tags::class, function (Faker $faker) {
    return [
        'title' => $faker->word()
    ];
});