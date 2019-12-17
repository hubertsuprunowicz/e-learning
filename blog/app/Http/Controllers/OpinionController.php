<?php
/**
 * Created by PhpStorm.
 * User: Dakruzz
 * Date: 24.04.2019
 * Time: 21:37
 */

namespace App\Http\Controllers;

use App\Opinion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OpinionController extends Controller
{
    public function create(Request $request)
    {
        $opinion = new Opinion();
        $opinion->user_id = Auth::user()->id;
        $opinion->teacher_id = $request->author_id;
        $opinion->rating = $request->rating;
        $opinion->details = $request->details;
        $opinion->save();
    }
}
