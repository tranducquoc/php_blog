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
$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Category::class, function (Faker\Generator $faker) {

    return [
        'category' => $faker->name,
    ];
});

$factory->define(App\Models\Post::class, function (Faker\Generator $faker) {

    return [
        'url' => $faker->text(255),
        'title' => $faker->text(140),
        'description' => $faker->text(170),
        'content' => $faker->text(50),
        'blog' => $faker->text(50),
        'user_id' => App\Models\User::pluck('id')->random(),
        'category_id' => App\Models\Category::pluck('id')->random(),
        'image' => $faker->text(255),
    ];
});

$factory->define(App\Models\PostTag::class, function (Faker\Generator $faker) {

    return [
        'post_id' => App\Models\Post::pluck('id')->random(),
        'tag_id' => App\Models\Tag::pluck('id')->random(),
    ];
});

$factory->define(App\Models\Tag::class, function (Faker\Generator $faker) {

    return [
        'tag' => $faker->name,
    ];
});
