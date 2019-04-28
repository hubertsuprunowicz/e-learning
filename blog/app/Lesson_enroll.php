<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

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


}
