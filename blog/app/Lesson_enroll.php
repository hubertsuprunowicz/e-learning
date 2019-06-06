<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class Lesson_enroll extends Model
{
	use Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'student_id', 'lesson_id', 'enroll_date'
	];

	public function user() : BelongsTo {
		return $this->belongsTo(User::class, 'user_id');
	}

	public function lesson() : BelongsTo {
		return $this->belongsTo(Lesson::class);
	}

	public static function lessonEnroll($lessonId) : void {
		$lesson = new Lesson_enroll();
		$lesson->student_id = Auth::user()->id;
		$lesson->lesson_id = $lessonId;
		$lesson->enroll_date = Carbon::now();
		$lesson->save();
	}


}
