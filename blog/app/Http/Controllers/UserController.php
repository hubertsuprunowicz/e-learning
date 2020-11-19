<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(): View
    {
        $user = Lesson::all();
        return view('main.profile', compact('user'));
    }

    public function edit($id, Request $request)
    {
        $user = User::find($id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->image = $request->image;
        $user->occupation = $request->occupation;
        $user->about = $request->about;
        $user->save();


        return redirect()->route('user.profile', Auth::user()->name);
    }

    public function show($id): View
    {
        $user = User::with('opinions.user')
            ->where('id', $id)
            ->firstOrFail();

        return view('main.profile', compact('user'));
    }
}
