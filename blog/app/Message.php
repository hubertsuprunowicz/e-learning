<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class Message extends Model
{
	use Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'title', 'message', 'user_id', 'sent_to'
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'ip',
	];

	public static function send($username, $title, $message)
	{
		DB::table('messages')->insert([
			'ip' => request()->ip(),
			'user_id' => Auth::user()->name,
			'sent' => $username,
			'message' => $message,
			'title' => $title,
			'created_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}

	public static function getMessages()
	{
		$messageInfo = DB::table('messages')
			->where('sent', Auth::user()->name)
			->latest()
			->get();

		return $messageInfo;
	}

	public static function getMessagesFromWantedUser($wantedUser)
	{
		$messages = DB::table('messages')
			->where('received', $wantedUser)
			->orWhere('sent', $wantedUser)
			->where('received', Auth::user()->name)
			->latest()
			->get();

		return $messages;
	}

	public static function getUserList($sent)
	{
		$userList = DB::table('messages')
			->where('sent', $sent)
			->latest()
			->pluck('received');

		$userList = array_unique(json_decode(json_encode($userList), true));

		return $userList;
	}



}
