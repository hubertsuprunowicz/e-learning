<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitesController extends Controller
{
	public function index() {

		return view('main.index');
	}

	public function getListOfLessons() {

		return view('main.courses');
	}

	public function activeLesson() {

		return view('partials.videochat');
	}

	public function getLesson() {

		return view('partials.about_lesson');
	}

	public function addLesson() {

		return view('partials.add_lesson');
	}

	public function getYourLessons() {

		return view('partials.your_lessons');
	}

	public function adminPanel() {

		return view('main.admin');
	}


}
