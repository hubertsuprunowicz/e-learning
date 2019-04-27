<?php

use App\User;
use App\Lesson;
use Illuminate\Support\Str;
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
		'student_limit' => $faker->numberBetween(1,300),
		'description' => $faker->text(1200),
		'exam' => $faker->boolean,
	];
});
