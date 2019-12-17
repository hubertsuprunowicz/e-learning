<?php
/**
 * Created by PhpStorm.
 * User: Dakruzz
 * Date: 24.04.2019
 * Time: 22:40
 */

namespace App\Http\Controllers;


use App\Advertisement;
use App\Lesson;
use App\Opinion;
use App\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;


class AdvertisementController extends Controller
{
	public function index() : View {
        $stats = [
            'lessonsHours' => round(Lesson::sum('length') / 60),
            'totalUsers' => User::count(),
            'opinions' => Opinion::count(),
        ];

		$advertisements = Advertisement::with('lesson.user', 'lesson.enroll')->limit(6)->latest()->get();


		return view('main.index', compact('advertisements'), compact('stats'));
	}

}
