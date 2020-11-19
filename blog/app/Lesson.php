<?php

namespace App;

use Carbon\Carbon;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Lesson extends Model
{
    use Notifiable;

    protected const LESSONS_PER_PAGE = 30;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'author_id',
        'date',
        'price',
        'subject',
        'length',
        'student_limit',
        'description',
        'video_link'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function enroll()
    {
        return $this->hasMany(LessonEnroll::class);
    }

    public function advertisement()
    {
        return $this->hasMany(Advertisement::class);
    }

    public static function lessonsLimiter()
    {
        return ceil(DB::table('lessons')->count() / self::LESSONS_PER_PAGE);
    }

    public static function getIfActive()
    {
        $lessons = LessonEnroll::with([
            'lesson' => function ($query) {
                $query->orderBy('date');
            }
        ])
            ->where('student_id', Auth::user()->id)
            ->get();

        foreach ($lessons as $lessonEnrolled) {
            $endOfLesson = Carbon::parse($lessonEnrolled->lesson->date);
            $endOfLesson->addMinute($lessonEnrolled->lesson->length);

            if (
                Carbon::now()->timestamp <= $endOfLesson->timestamp &&
				Carbon::parse($lessonEnrolled->lesson->date)->timestamp <= Carbon::now()->timestamp
            ) {
                return $lessonEnrolled;
            }
        }

        return $lessons;
    }

    public function mostLessonCreated($top = 3)
    {
        $lesson = DB::table('lessons')
            ->select(
                'author_id',
                DB::raw('count(*) as total'),
                DB::raw('sum(price) as price')
            )
            ->groupBy('author_id')
            ->orderBy('total', 'DESC')
            ->limit($top)
            ->get();

        return $lesson;
    }

    public static function count()
    {
        return DB::table('lessons')->count();
    }
}
