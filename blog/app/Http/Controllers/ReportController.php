<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;

//use http\Env\Request;

class ReportController extends Controller
{
    public function index()
    {
        echo "index";
    }

    public function create(Request $request)
    {
        $report = new Report();
        if ($request->type === Report::LESSON) {
            $report->lesson_id = $request->id;
        } else {
            $report->user_id = $request->id;
        }

        $report->save();

        return redirect()->back();
    }
}
