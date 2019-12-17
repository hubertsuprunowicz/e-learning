<?php
/**
 * Created by PhpStorm.
 * User: Dakruzz
 * Date: 24.04.2019
 * Time: 21:36
 */

namespace App\Http\Controllers;


use App\LessonEnroll;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LessonEnrollController extends Controller
{
    public function create(Request $request)
    {
        if (LessonEnroll::signed($request->lessonId))
            return redirect()->back()->withErrors(['You have already signed to this lesson']);

        $lesson = new LessonEnroll();
        $lesson->student_id = Auth::user()->id;
        $lesson->lesson_id = $request->lessonId;
        $lesson->enroll_date = Carbon::now();
        $lesson->save();

        return redirect()->back();
    }
}
