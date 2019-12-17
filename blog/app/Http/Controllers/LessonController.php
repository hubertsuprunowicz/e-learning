<?php
/**
 * Created by PhpStorm.
 * User: Dakruzz
 * Date: 24.04.2019
 * Time: 21:34
 */

namespace App\Http\Controllers;

use App\Lesson;
use App\User;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LessonController extends Controller
{
    protected const LESSONS_PER_PAGE = 30;

    public function index($pageNumber)
    {
        $pageNumberLimit = Lesson::lessonsLimiter();
        if ($pageNumber < 1 || $pageNumber > $pageNumberLimit) {
            return redirect('/');
        }

        $startRange =
            $pageNumber * self::LESSONS_PER_PAGE - self::LESSONS_PER_PAGE;
        $endRange = $pageNumber * self::LESSONS_PER_PAGE - 1;
        $lessons = Lesson::with('enroll')
            ->latest()
            ->get();

        return view(
            'main.courses',
            compact(
                'lessons',
                'startRange',
                'endRange',
                'pageNumber',
                'pageNumberLimit'
            )
        );
    }

    public function create(Request $request)
    {
        if ($request->date < date(Carbon::now())) {
            return redirect()
                ->back()
                ->withErrors(['The date you wrote has already passed']);
        }

        $lesson = new Lesson();
        $lesson->author_id = Auth::user()->id;
        $lesson->subject = $request->title;
        $lesson->length = $request->length;
        $lesson->date = $request->date;
        $lesson->student_limit = $request->qty ? $request->qty : -1;
        $lesson->price = $request->price;
        $lesson->video_link = $request->videoLink;
        $lesson->description = $request->desc;
        $lesson->save();

        return redirect()->route('lessons_page', 1);
    }

    public function edit(int $id, Request $request)
    {
        $lesson = Lesson::find($id);
        $lesson->subject = $request->title;
        $lesson->length = $request->length;
        $lesson->date = $request->date;
        $lesson->student_limit = $request->qty ? $request->qty : -1;
        $lesson->price = $request->price;
        $lesson->video_link = $request->videoLink;
        $lesson->description = $request->desc;
        $lesson->save();

        return redirect()->route('lesson.get', $id);
    }

    public function delete($id)
    {
        $lesson = Lesson::find($id);
        $lesson->delete();

        return redirect()
            ->back()
            ->with('success');
    }

    public function show($id, Lesson $lesson, User $author): View
    {
        $lesson = $lesson->with('user', 'enroll')->find($id);

        return view('partials.about_lesson', compact('lesson', 'author'));
    }
}
