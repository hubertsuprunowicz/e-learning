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
			'message' => 'lorem ipsum noone reading more than than',
			'received' => 'admin',
			'sent' => 'admin'
		]);
		$message->save();

		$message = new \App\Message([
			'title' => 'title test 01',
			'message' => 'lorem ipsum noone reading more than than',
			'received' => 'test01',
			'sent' => 'admin'
		]);
		$message->save();

		$message = new \App\Message([
			'title' => 'title test 02',
			'message' => 'lorem ipsum noone reading more than than',
			'received' => 'test01',
			'sent' => 'admin'
		]);
		$message->save();

		$message = new \App\Message([
			'title' => 'title test 03',
			'message' => 'lorem ipsum noone reading more than than',
			'received' => 'test01',
			'sent' => 'admin'
		]);
		$message->save();

		$message = new \App\Message([
			'title' => 'title test 04',
			'message' => 'lorem ipsum noone reading more than than',
			'received' => 'admin',
			'sent' => 'test01'
		]);
		$message->save();


		$message = new \App\Message([
			'title' => 'title test 05',
			'message' => 'lorem ipsum noone reading more than than',
			'received' => 'admin',
			'sent' => 'test01'
		]);
		$message->save();
    }
}
