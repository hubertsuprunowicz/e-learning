<?php

use Illuminate\Database\Seeder;

class OpinionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$opinion = new \App\Opinion([
			'user_id' => 3,
			'teacher_id' => 2,
			'rating' => 4,
			'details' => 'Praesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.'
		]);
		$opinion->save();

		$opinion = new \App\Opinion([
			'user_id' => 6,
			'teacher_id' => 3,
			'rating' => 5,
			'details' => "habitasse platea dictumst. Etiam faucibus cursid mauris vulputate elementum. Nullam varius. Nulla facilisi."
		]);
		$opinion->save();

		$opinion = new \App\Opinion([
			'user_id' => 2,
			'teacher_id' => 1,
			'rating' => 3,
		]);
		$opinion->save();

		$opinion = new \App\Opinion([
			'user_id' => 1,
			'teacher_id' => 2,
			'rating' => 4,
			'details' => "In hac habitasse platea dictumst. Etiam faucibus cursus urna. Uat id mauris vulputate elementum. Nullam varius. Nulla facilisi."
		]);
		$opinion->save();

		$opinion = new \App\Opinion([
			'user_id' => 4,
			'teacher_id' => 1,
			'rating' => 1
		]);
		$opinion->save();

		$opinion = new \App\Opinion([
			'user_id' => 4,
			'teacher_id' => 5,
			'rating' => 5,
		]);
		$opinion->save();

		$opinion = new \App\Opinion([
			'user_id' => 6,
			'teacher_id' => 2,
			'rating' => 4,
			'details' => 'Sed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.\n\nPellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.'
		]);
		$opinion->save();
    }
}
