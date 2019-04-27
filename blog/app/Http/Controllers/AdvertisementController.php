<?php
/**
 * Created by PhpStorm.
 * User: Dakruzz
 * Date: 24.04.2019
 * Time: 22:40
 */

namespace App\Http\Controllers;


use App\Advertisement;
use App\Http\Controllers\Controller;
use App\Lesson;
use App\Opinion;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;


class AdvertisementController extends Controller
{
	public function index() : View {
		$advertisements = Advertisement::with('lesson.user')->limit(6)->latest()->get();
		return view('main.index', compact('advertisements'));
	}

}
