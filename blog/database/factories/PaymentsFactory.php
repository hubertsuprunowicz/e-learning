<?php
/**
 * Created by PhpStorm.
 * User: Dakruzz
 * Date: 27.04.2019
 * Time: 19:04
 */

use App\User;
use App\Lesson;
use App\Payment;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Payment::class, function (Faker $faker) {
	return [
		'user_id' => function () {
			return factory(User::class)->create()->id;
		},
		'lesson_id' => function () {
			return factory(Lesson::class)->create()->id;
		},
		'credit_card_number' => $faker->creditCardNumber(),
	];
});