<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Forum;
use Faker\Generator as Faker;

$factory->define(Forum::class, function (Faker $faker) {
    return [
        'name' => $faker -> sentence,
        'description' => $faker->paragraph,
    ];

    //$forums = Forum::with(['replies', 'posts'])->paginate(5);
});
