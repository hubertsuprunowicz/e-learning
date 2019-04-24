<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
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


}
