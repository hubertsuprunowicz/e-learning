<?php
/**
 * Created by PhpStorm.
 * User: Dakruzz
 * Date: 24.04.2019
 * Time: 21:36
 */

namespace App\Http\Controllers;


use App\Lesson_enroll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LessonEnrollController extends Controller
{
	public function index()  {

	}

	public function create(Request $request) {
		$alreadySigned = Lesson_enroll::where('lesson_id', '=', $request->lessonId)
							->where('student_id', '=', Auth::user()->id)
							->first();

		if($alreadySigned)
			return redirect()->back()->withErrors(['You have already signed to this lesson']);

		Lesson_enroll::lessonEnroll($request->lessonId);
		return redirect()->back();
	}

	public function edit(Request $request) {

	}

	public function delete() {

	}

}