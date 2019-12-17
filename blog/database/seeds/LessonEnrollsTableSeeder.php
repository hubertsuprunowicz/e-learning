<?php

use Illuminate\Database\Seeder;

class LessonEnrollsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$enroll = new \App\LessonEnroll([
			'student_id' => 2,
			'lesson_id' => 3,
			'enroll_date' => '2018-08-03 17:16:14'
		]);
		$enroll->save();

		$enroll = new \App\LessonEnroll([
			'student_id' => 3,
			'lesson_id' => 2,
			'enroll_date' => '2018-08-30 14:16:47'
		]);
		$enroll->save();

		$enroll = new \App\LessonEnroll([
			'student_id' => 2,
			'lesson_id' => 2,
			'enroll_date' => '2018-10-05 10:37:37'
		]);
		$enroll->save();

		$enroll = new \App\LessonEnroll([
			'student_id' => 3,
			'lesson_id' => 4,
			'enroll_date' => '2018-08-26 10:40:57'
		]);
		$enroll->save();

		$enroll = new \App\LessonEnroll([
			'student_id' => 4,
			'lesson_id' => 1,
			'enroll_date' => '2018-10-03 02:19:52'
		]);
		$enroll->save();

		$enroll = new \App\LessonEnroll([
			'student_id' => 4,
			'lesson_id' => 2,
			'enroll_date' => '2019-01-16 23:20:43'
		]);
		$enroll->save();

		$enroll = new \App\LessonEnroll([
			'student_id' => 6,
			'lesson_id' => 5,
			'enroll_date' => '2018-11-26 08:16:58'
		]);
		$enroll->save();

		$enroll = new \App\LessonEnroll([
			'student_id' => 6,
			'lesson_id' => 6,
			'enroll_date' => '2018-08-30 17:30:42'
		]);
		$enroll->save();

		$enroll = new \App\LessonEnroll([
			'student_id' => 6,
			'lesson_id' => 1,
			'enroll_date' => '2018-09-04 18:27:08'
		]);
		$enroll->save();

		$enroll = new \App\LessonEnroll([
			'student_id' => 5,
			'lesson_id' => 5,
			'enroll_date' => '2018-11-20 14:10:47'
		]);
		$enroll->save();
    }
}
