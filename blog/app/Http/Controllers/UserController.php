<?php

namespace App\Http\Controllers;

use App\User;
use App\Lesson;
use App\Opinion;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
	protected  $primaryKey = 'name';

	public function index() : View {
		$user = Lesson::all();
		return view('main.profile', compact('user'));
	}

	public function create(Request $request) {

	}

	public function edit(Request $request) {

		$userInformation = [
			'id' => Auth::user()->id,
			'firstName' => $request->firstName,
			'lastName' => $request->lastName,
			'image' => $request->image,
			'occupation' => $request->occupation,
			'about' => $request->about
		];

		$user = new User();
		$user->userPut($userInformation);

		return redirect()->route('user.profile', Auth::user()->name);
	}

	public function delete() {

	}

	public function show($username) : View {
		$user = User::with('opinions.user')->where('name', $username)->firstOrFail();
		return view('main.profile', compact('user'));
	}

}
