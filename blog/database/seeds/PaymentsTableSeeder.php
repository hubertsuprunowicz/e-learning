<?php

use Illuminate\Database\Seeder;

class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$payment = new \App\Payment([
			'user_id' => 2,
			'lesson_id' => 3,
			'credit_card_number' => 3562630498959772
		]);
		$payment->save();

		$payment = new \App\Payment([
			'user_id' => 3,
			'lesson_id' => 2,
			'credit_card_number' => 3578000659197475
		]);
		$payment->save();

		$payment = new \App\Payment([
			'user_id' => 2,
			'lesson_id' => 2,
			'credit_card_number' => 3562630498959772
		]);
		$payment->save();

		$payment = new \App\Payment([
			'user_id' => 3,
			'lesson_id' => 4,
			'credit_card_number' => 3578000659197475
		]);
		$payment->save();

		$payment = new \App\Payment([
			'user_id' => 4,
			'lesson_id' => 1,
			'credit_card_number' => 589385829894137701
		]);
		$payment->save();

		$payment = new \App\Payment([
			'user_id' => 4,
			'lesson_id' => 2,
			'credit_card_number' => 589385829894137701
		]);
		$payment->save();

		$payment = new \App\Payment([
			'user_id' => 6,
			'lesson_id' => 5,
			'credit_card_number' => 3535496567331820
		]);
		$payment->save();

		$payment = new \App\Payment([
			'user_id' => 6,
			'lesson_id' => 6,
			'credit_card_number' => 3535496567331820
		]);
		$payment->save();

		$payment = new \App\Payment([
			'user_id' => 6,
			'lesson_id' => 1,
			'credit_card_number' => 3535496567331820
		]);
		$payment->save();

		$payment = new \App\Payment([
			'user_id' => 5,
			'lesson_id' => 5,
			'credit_card_number' => 3549962809105227
		]);
		$payment->save();
    }
}
