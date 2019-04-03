<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$message = new \App\Message([
			'title' => 'title test 00',
			'message' => 'Sed ante. Vivamus tortor. Duis mattis egestas metus.',
			'user_id' => 1,
			'sent_to' => 2
		]);
		$message->save();

		$message = new \App\Message([
			'title' => 'title test 01',
			'message' => 'Nullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.',
			'user_id' => 2,
			'sent_to' => 3
		]);
		$message->save();

		$message = new \App\Message([
			'title' => 'title test 02',
			'message' => 'Nulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.',
			'user_id' => 3,
			'sent_to' => 2
		]);
		$message->save();

		$message = new \App\Message([
			'title' => 'title test 03',
			'message' => 'Lorem ipsum noone reading more than than',
			'user_id' => 2,
			'sent_to' => 5
		]);
		$message->save();

		$message = new \App\Message([
			'title' => 'title test 04',
			'message' => 'In hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.',
			'user_id' => 5,
			'sent_to' => 1
		]);
		$message->save();


		$message = new \App\Message([
			'title' => 'title test 05',
			'message' => 'Suspendisse potenti. In eleifend quam a odio. In hac habitasse platea dictumst. Maecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.',
			'user_id' => 6,
			'sent_to' => 2
		]);
		$message->save();

		$message = new \App\Message([
			'title' => 'title test 04',
			'message' => 'Etiam faucibus cursus urna. Ut tellus. :)))',
			'user_id' => 3,
			'sent_to' => 4
		]);
		$message->save();
    }
}
