<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Advertisement;
use App\Lesson;
use App\Opinion;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $stats = new Admin();

        $statistics = [];
        $statistics['totalMessages'] = $stats->totalMessages();
        $statistics['totalUsers'] = $stats->totalUsers();
        $statistics['totalLessons'] = $stats->totalLessons();

        $info = $stats->mostLessonCreatedTop3();
        $topUserLesson = [];
        $topUserLesson[0]['user'] =  User::find($info[0]->author_id);
        $topUserLesson[0]['total'] =  $info[0]->total;
        $topUserLesson[0]['price'] =  $info[0]->price;

        $topUserLesson[1]['user'] =  User::find($info[1]->author_id);
        $topUserLesson[1]['total'] =  $info[1]->total;
        $topUserLesson[1]['price'] =  $info[1]->price;

        $topUserLesson[2]['user'] =  User::find($info[2]->author_id);
        $topUserLesson[2]['total'] =  $info[2]->total;
        $topUserLesson[2]['price'] =  $info[2]->price;

        return view('main.admin', compact('statistics', 'topUserLesson'));
    }

    public function create(Request $request) {

    }

    public function delete() {}
    public function edit() {}
}