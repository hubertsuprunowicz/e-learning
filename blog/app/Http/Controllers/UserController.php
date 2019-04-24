<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
	protected  $primaryKey = 'user';

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

	public function show($username, User $user) : View {
		$user = $user->find($username);
		return view('main.profile', compact('user'));
	}

}
