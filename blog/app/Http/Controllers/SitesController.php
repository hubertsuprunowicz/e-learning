<?php

namespace App\Http\Controllers;

use App\Advertisement;
use App\Lesson;
use App\Opinion;
use App\User;
use Illuminate\Http\Request;

class SitesController extends Controller
{

//		$public function index(): Response
//		{
//			$posts = Cache::remember('feed-posts', now()->addHour(), function () {
//				return Post::latest()->limit(20)->get();
//			});
//			return response()->view('posts_feed.index', [
//				'posts' => $posts
//			], 200)->header('Content-Type', 'text/xml');
//		}

	public function index() {}
	public function show() {}
	public function delete() {}
//
//
//	public function getListOfLessons() {
//		$lessons = Lesson::all();
//		return view('main.courses', compact('lessons'));
//	}
//
//	public function activeLesson() {
//
//		return view('partials.videochat');
//	}
//
//	public function getLesson($id) {
//		$lesson = Lesson::find($id);
//		$author = Lesson::find($id)->user()->pluck('last_name', 'first_name');
//		$opinions = Opinion::with('teacher')->get();
//		return view('partials.about_lesson', compact('lesson', 'author', 'opinions'));
//	}
//
//	public function addLesson() {
//
//		return view('partials.add_lesson');
//	}
//
//
//	public function getYourLessons($id) {
//		$lessons = User::find($id, 'userna')->lessons()->get();
//		return view('partials.your_lessons', compact('lessons'));
//	}
//
//	public function adminPanel() {
//
//		return view('main.admin');
//	}




}
