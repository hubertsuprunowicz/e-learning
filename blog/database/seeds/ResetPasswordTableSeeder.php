<?php

use Illuminate\Database\Seeder;

class ResetPasswordTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$reset = new \App\PasswordReset([
			'email' => 'test01@test.com',
			'token' => 'SRniGU2sRQb2K1ylXKnWwZr4HrtdRgrM',
		]);
		$reset->save();

		$reset = new \App\PasswordReset([
			'email' => 'test02@test.com',
			'token' => 'q1sRUjNq1K9rG905aneFzyD5IcqD4dlC',
		]);
		$reset->save();

		$reset = new \App\PasswordReset([
			'email' => 'test03@test.com',
			'token' => 'AKwPJMEM5ytgJyJyGqoD5FQwxv82YvMr',
		]);
		$reset->save();

		$reset = new \App\PasswordReset([
			'email' => 'test04@test.com',
			'token' => 'baJGt7cdLDbIxMctLsEBWgAw5BByP5V0',
		]);
		$reset->save();

		$reset = new \App\PasswordReset([
			'email' => 'test05@test.com',
			'token' => 'gG5Gt7cdLDbIxMctLsEBWgAw53Byy5V9',
		]);
		$reset->save();
    }
}
