<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class Admin extends Model
{
    use Notifiable;

    public function mostLessonCreatedTop3()
    {
        $lesson = DB::table('lessons')
            ->select('author_id', DB::raw('count(*) as total'), DB::raw('sum(price) as price'))
            ->groupBy('author_id')
            ->orderBy('total', 'DESC')
            ->limit(3)
            ->get();

        return $lesson;

        /*
         * return top 3 users name, how many lesson they created and total price
         * */
    }

    public function totalMessages()
    {
        return DB::table('messages')->count();
    }

    public function totalLessons()
    {
        return DB::table('lessons')->count();
    }

    public function totalUsers()
    {
        return DB::table('users')->count();
    }

}
