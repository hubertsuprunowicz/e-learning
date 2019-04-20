<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Advertisement extends Model
{
	use Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'lesson_id', 'added_on'
	];

	public function lesson(){
		return $this->belongsTo(Lesson::class, 'lesson_id');
	}
}
