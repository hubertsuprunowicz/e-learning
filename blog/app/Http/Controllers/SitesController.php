<?php

namespace App\Http\Controllers;

use App\Advertisement;
use App\Lesson;
use App\User;
use Illuminate\Http\Request;

class SitesController extends Controller
{
	protected $lessons;
	protected $advertisements;

	public function __construct(Lesson $lessons, Advertisement $advertisements)
	{
		$this->lessons = $lessons;
		$this->advertisements = $advertisements;
	}

	public function index() {
		$advertisements = $this->advertisements->with('lesson')->limit(6)->get();
//		$advs = Advertisement::with('lesson')->limit(6)->get();
		return view('main.index', compact('advertisements'));
	}


	public function getListOfLessons() {

		return view('main.courses');
	}

	public function activeLesson() {

		return view('partials.videochat');
	}

	public function getLesson($id) {
		$lesson = Lesson::find($id)->lesson()->get();
		return view('partials.about_lesson', compact('lesson'));
	}

	public function addLesson() {

		return view('partials.add_lesson');
	}


	public function getYourLessons($id) {
		$lessons = User::find($id)->lessons()->get();
		return view('partials.your_lessons', compact('lessons'));
	}



	public function adminPanel() {

		return view('main.admin');
	}


}
