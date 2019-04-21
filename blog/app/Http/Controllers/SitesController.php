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
	protected $users;

	public function __construct(Lesson $lessons, Advertisement $advertisements, User $users)
	{
		$this->lessons = $lessons;
		$this->advertisements = $advertisements;
		$this->users = $users;
	}

	public function index() {
		$advertisements = $this->advertisements->with('lesson')->limit(6)->get();
//		$advs = Advertisement::with('lesson')->limit(6)->get();
		return view('main.index', compact('advertisements'));
	}


	public function getListOfLessons() {
		$lessons = $this->lessons->all();
		return view('main.courses', compact('lessons'));
	}

	public function activeLesson() {

		return view('partials.videochat');
	}

	public function getLesson($id) {
		$lesson = Lesson::with('lesson')->find($id);
		$author = User::with('user')->find($id);
		return view('partials.about_lesson', compact('lesson', 'author'));
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
