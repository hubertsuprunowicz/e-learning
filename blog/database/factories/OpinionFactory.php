<?php
/**
 * Created by PhpStorm.
 * User: Dakruzz
 * Date: 27.04.2019
 * Time: 18:03
 */

use App\User;
use App\Lesson;
use App\Opinion;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Opinion::class, function (Faker $faker) {
	return [
		'user_id' => function () {
			return factory(User::class)->create()->id;
		},
//		'teacher_id' => function () {
//			return factory(User::class)->create()->id;
//		},
		'teacher_id' => $faker->numberBetween(2, User::count()),
		'rating' => $faker->numberBetween(1,5),
		'details' => $faker->text(200)
	];
});
