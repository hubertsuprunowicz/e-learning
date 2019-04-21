<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
	public function profile()
	{
		$user = User::with('user')->find($id);
		return view('main.profile');
	}

	public function index() {
		//$advertisements = $this->advertisements->with('lesson')->limit(6)->get();
//		$advs = Advertisement::with('lesson')->limit(6)->get();
		return view('main.index', compact('advertisements'));
	}

}
