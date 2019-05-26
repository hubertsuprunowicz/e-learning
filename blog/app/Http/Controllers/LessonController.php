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
	public const LESSONS_PER_PAGE = 30;

	public function index($pageNumber) : View {
		$pageNumberLimit = Lesson::lessonsLimiter(self::LESSONS_PER_PAGE);
		if($pageNumber < 1 || $pageNumber > $pageNumberLimit) {
			return redirect('/');
		}

		$startRange = ($pageNumber * self::LESSONS_PER_PAGE) - self::LESSONS_PER_PAGE;
		$endRange = ($pageNumber * self::LESSONS_PER_PAGE) - 1;
		$lessons = Lesson::with('enroll')->latest()->get();

		return view('main.courses', compact('lessons', 'startRange', 'endRange', 'pageNumber', 'pageNumberLimit'));
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