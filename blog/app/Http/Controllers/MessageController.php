<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Message;
use Illuminate\Support\Facades\Auth;


class MessageController extends Controller
{

	public function index() {
		$messages = Message::with('user')
							->where('sent_to', Auth::user()->name)
							->latest()
							->get();

		return view('partials.messages', compact('messages'));
	}

	public function create(Request $request) {

	    $user = User::where('name', '=', $request->sent_to)->first();

	    if(empty($user)) {
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

	public function delete() {}
	public function edit() {}



//	public function messages(Request $request)
//	{
//		$wantedUser = $request->query();
//		$wantedUser = array_keys($wantedUser);
//
//		$messages = ($request->query()) ? Message::getMessagesFromWantedUser($wantedUser[0]) : Message::getMessages();
//		$received = Message::getUserList(Auth::user()->name);
//
//		return view('partials.messages', ['messages' => $messages], ['received' => $received]);
//	}
//
//	public function postMessage(Request $request)
//	{
//		$username = $request->name;
//		$title = $request->title;
//		$message = $request->message;
//
//		$validator = Validator::make($request->all(), [
//			'name' => 'exists:message,from'
//		]);
//
//		if ($validator->fails()) {
//			return redirect()->back()->withErrors($validator);
//		}
//
//		Messages::send($username, $title, $message);
//
//		return redirect()->back();
//	}


}
