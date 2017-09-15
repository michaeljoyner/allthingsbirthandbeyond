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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => 'password',
        'superadmin' => true,
        'remember_token' => str_random(10),
    ];
});

$factory->define(Dymantic\Articles\Article::class, function (Faker\Generator $faker) {

    return [
        'author_id' => function() {
            return factory(\App\User::class)->create()->id;
        },
        'author_type' => \App\User::class,
        'title' => $faker->sentence,
        'description' => $faker->paragraph,
        'intro' => $faker->paragraph,
        'body' => $faker->paragraphs(5, true),
        'is_draft' => false,
        'published_on' => \Carbon\Carbon::parse('-2 days')
    ];
});

$factory->define(App\Testimonials\Testimonial::class, function (Faker\Generator $faker) {

    return [
        'client' => $faker->name,
        'body' => $faker->paragraph
    ];
});
