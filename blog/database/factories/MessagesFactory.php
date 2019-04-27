<?php
/**
 * Created by PhpStorm.
 * User: Dakruzz
 * Date: 27.04.2019
 * Time: 19:03
 */

use App\User;
use App\Message;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {
	return [
		'user_id' => function () {
			return factory(User::class)->create()->id;
		},
		'title' => $faker->word,
		'message' => $faker->realText(500),
		'sent_to' => function () {
			return factory(User::class)->create()->id;
		}
	];
});