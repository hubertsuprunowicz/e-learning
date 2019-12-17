<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class MessageController extends Controller
{

    public function index()
    {
        $messages = Message::with('user')
            ->where('sent_to', Auth::user()->name)
            ->latest()
            ->get();

        return view('partials.messages', compact('messages'));
    }

    public function create(Request $request)
    {
        $user = User::where('name', '=', $request->sent_to)->first();

        if (empty($user)) {
            return redirect()->back()->withErrors(['User does not exist']);
        } else {
            $message = new Message;
            $message->user_id = Auth::user()->id;
            $message->sent_to = $request->sent_to;
            $message->title = $request->title;
            $message->message = $request->body;
            $message->save();

            return redirect()->back();
        }
    }

}
