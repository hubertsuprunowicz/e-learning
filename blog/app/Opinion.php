<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Opinion extends Model
{
	use Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'user_id', 'teacher_id', 'rating', 'details', 'first_name', 'last_name', 'educational_degree', 'phone_number'
	];

	public function user(){
		return $this->belongsTo(User::class, 'user_id');
	}

	public function teacher(){
		return $this->belongsTo(User::class, 'teacher_id');
	}

}
