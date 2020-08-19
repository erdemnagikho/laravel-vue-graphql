<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3),
        'content' => $faker->paragraphs(10, true),
        'lead' => $faker->text(200),
        'author_id' => random_int(1, 20),
        'topic_id' => random_int(1, 3),
    ];
});
