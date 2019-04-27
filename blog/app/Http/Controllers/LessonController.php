<?php
/**
 * Created by PhpStorm.
 * User: Dakruzz
 * Date: 24.04.2019
 * Time: 21:34
 */
namespace App\Http\Controllers;

use App\Lesson;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class LessonController extends Controller
{
	public function index() : View {
		$lessons = Lesson::all()->sortByDesc('created_at');
		return view('main.courses', compact('lessons'));
	}

	public function create(Request $request) {

	}

	public function edit() {

	}

	public function delete(Request $request) {

	}

	public function show($id, Lesson $lesson, User $author) : View {
		$lesson = $lesson->with('user')->find($id);
		return view('partials.about_lesson', compact('lesson', 'author'));
	}
}