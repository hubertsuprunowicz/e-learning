<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'first_name', 'last_name', 'phone_number', 'image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


	public function lessons() {
		return $this->hasMany(Lesson::class);
	}

	public function messages() {
		return $this->hasMany(Message::class);
	}

	public function opinions() {
		return $this->hasMany(Opinion::class, 'teacher_id');
	}

	public function enrolls() {
		return $this->hasMany(Lesson_enroll::class);
	}

	public function userPut($userInfo) {
		$user = self::find($userInfo['id']);
		$user->first_name = $userInfo['firstName'];
		$user->last_name = $userInfo['lastName'];
		$user->image = $userInfo['image'];
		$user->occupation = $userInfo['occupation'];
		$user->about = $userInfo['about'];
		$user->save();
	}

	public function setPasswordAttribute($password)
	{
		$this->attributes['password'] = \Hash::make($password);
	}

	public function sendPasswordResetNotification($token)
	{
		$this->notify(new ResetPasswordNotification($token));
	}

}

