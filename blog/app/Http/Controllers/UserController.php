<?php

namespace App\Http\Controllers;

use App\User;
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

	public function show($username, User $user) : View {
		$user = $user->where('name', $username)->firstOrFail();
		//$user->created_at = date_format($user->created_at, 'Y');
		return view('main.profile', compact('user'));
	}

}
