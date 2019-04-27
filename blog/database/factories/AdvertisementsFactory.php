<?php
/**
 * Created by PhpStorm.
 * User: Dakruzz
 * Date: 27.04.2019
 * Time: 19:04
 */

use App\Lesson;
use App\Advertisement;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Advertisement::class, function (Faker $faker) {
	return [
		'lesson_id' => function () {
			return factory(Lesson::class)->create()->id;
		},
	];
});