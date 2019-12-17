<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\Message;
use App\Report;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $usersReports = Report::with('user')
            ->select('user_id', DB::raw('count(*) as total'))
            ->whereNotNull('user_id')
            ->groupBy('user_id')
            ->orderByDesc('total')
            ->get();

        $lessonsReports = Report::with('lesson')
            ->select('lesson_id', DB::raw('count(*) as total'))
            ->whereNotNull('lesson_id')
            ->groupBy('lesson_id')
            ->orderByDesc('total')
            ->get();

        $userStats = Lesson::with('user')
            ->select('author_id', DB::raw('sum(price) as total'))
            ->groupBy('author_id')
            ->orderByDesc('total')
            ->limit(5)
            ->get();

        $statistics = [];
        $statistics['totalMessages'] = Message::count();
        $statistics['totalUsers'] = User::count();
        $statistics['totalLessons'] = Lesson::count();
        $statistics['usersReports'] = $usersReports;
        $statistics['lessonsReports'] = $lessonsReports;

        return view('main.admin', compact('statistics', 'userStats'));
    }
}
