<?php

namespace App\Http\Controllers;

use App\Advertisement;
use App\Lesson;
use App\Opinion;
use App\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

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

	public function index() : View {
		return view('main.admin');
	}

	public function show() {}
	public function delete() {}





//	TEMPORARY SOLUTION
	public function activeLesson() {

		return view('partials.videochat');
	}

	public function addLesson() {
		return view('partials.add_lesson');
	}

	public function getYourLessons($id) {
		$lessons = User::find($id, 'username')->lessons()->get();
		return view('partials.your_lessons', compact('lessons'));
	}





}
