<?php

use Illuminate\Database\Seeder;

class AdvertisementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$adv = new \App\Advertisement([
			'lesson_id' => 1
		]);
		$adv->save();

		$adv = new \App\Advertisement([
			'lesson_id' => 2
		]);
		$adv->save();

		$adv = new \App\Advertisement([
			'lesson_id' => 3
		]);
		$adv->save();

		$adv = new \App\Advertisement([
			'lesson_id' => 4
		]);
		$adv->save();

		$adv = new \App\Advertisement([
			'lesson_id' => 5
		]);
		$adv->save();

		$adv = new \App\Advertisement([
			'lesson_id' => 6
		]);
		$adv->save();

		$adv = new \App\Advertisement([
			'lesson_id' => 7
		]);
		$adv->save();


    }
}
