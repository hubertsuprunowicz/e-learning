<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitesController extends Controller
{
	public function index() {

		return view('main.index');
	}

	public function getCourses() {

		return view('main.courses');
	}

	public function loadContent() {

		return view('partials.footer');
	}

	public function loadActiveCourse() {

		return view('partials.videochat');
	}


}
