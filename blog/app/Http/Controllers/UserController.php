<?php

namespace App\Http\Controllers;

use App\User;
use App\Lesson;
use App\Opinion;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class UserController extends Controller
{
	protected  $primaryKey = 'name';

	public function index() : View {
		$user = Lesson::all();
		return view('main.profile', compact('user'));
	}

	public function create(Request $request) {

	}

	public function edit() {
		return view('main.admin', compact('user'));
	}

	public function delete() {

	}

	public function show($username) : View {
		$user = User::with('opinions.user')->where('name', $username)->firstOrFail();
		return view('main.profile', compact('user'));
	}

}
