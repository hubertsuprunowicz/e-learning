<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Lesson extends Model
{
	use Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'author_id', 'date', 'price', 'subject', 'length', 'student_limit', 'description'
	];

	public function user() {
		return $this->belongsTo(User::class, 'author_id');
	}

	public function enroll() {
		return $this->hasMany(Lesson_enroll::class);
	}

	public function advertisement() {
		return $this->hasMany(Advertisement::class);
	}

	public function lessonPost($lesson) {
		DB::table('users')->insert([
			[
				'date' => $lesson['date'],
				'price' => $lesson['price'],
				'subject' => $lesson['subject'],
				'length' => $lesson['length'],
				'student_limit' => $lesson['student_limit'],
				'description' => $lesson['description']
			]
		]);
	}

	public static function lessonsLimiter($lessonsPerPage) {
		return ceil(DB::table('lessons')->count() / $lessonsPerPage);
	}

	public static function getIfActive()  {
		$lesson = Lesson_enroll::with(['lesson' => function($query) {
			$query->orderBy('date');
		}])
			->where('student_id', Auth::user()->id)
			->get();

		foreach ($lesson as $less){
			$endOfLesson = Carbon::parse($less->lesson->date);
			$endOfLesson->addHours($less->lesson->length/60);
			if(date(Carbon::now()) <= date($endOfLesson) && $less->lesson->date <= date(Carbon::now()));
				//return $less;
		}

		return $lesson;
	}



}
