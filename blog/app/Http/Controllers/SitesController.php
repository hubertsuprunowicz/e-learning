<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\User;

class SitesController extends Controller
{
    public function editUser($id)
    {
        $user = User::find($id);
        return view('partials.edit_profile', compact('user'));
    }

    public function editLesson($id)
    {
        $lesson = Lesson::find($id);
        return view('partials.edit_lesson', compact('lesson'));
    }

    public function activeLesson()
    {
        $lessons = Lesson::getIfActive();
        return view('partials.videochat', compact('lessons'));
    }

    public function addLesson()
    {
        return view('partials.add_lesson');
    }

    public function getYourLessons($id)
    {
        $lessons = Lesson::where('author_id', $id)->get();
        return view('partials.your_lessons', compact('lessons'));
    }
}
