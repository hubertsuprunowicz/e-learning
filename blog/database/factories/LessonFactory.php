<?php

use App\Lesson;
use App\User;
use Faker\Generator as Faker;

$factory->define(Lesson::class, function (Faker $faker) {
    return [
        'author_id' => function () {
            return factory(User::class)->create()->id;
        },
        'date' => $faker->dateTime(),
        'price' => $faker->randomFloat(2, 0, 500),
        'subject' => $faker->jobTitle,
        'length' => $faker->numberBetween(30, 240),
        'student_limit' => $faker->numberBetween(10, 300),
        'description' => $faker->text(1200),
        'video_link' => 'https://player.vimeo.com/video/137857207'
    ];
});
