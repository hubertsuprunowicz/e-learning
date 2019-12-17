<?php
/**
 * Created by PhpStorm.
 * User: Dakruzz
 * Date: 27.04.2019
 * Time: 19:03
 */

use App\User;
use App\LessonEnroll;
use App\Lesson;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(LessonEnroll::class, function (Faker $faker) {
	return [
		'student_id' => function () {
			return factory(User::class)->create()->id;
		},
		'lesson_id' => function () {
			return factory(Lesson::class)->create()->id;
		},
		'enroll_date' => $faker->dateTime(),
	];
});
