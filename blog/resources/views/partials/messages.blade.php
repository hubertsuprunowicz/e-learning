@extends('layouts.master')

@section('content')

    <main class="main-messages">

        <article class="article-messages-panel">
            <aside class="aside-message-panel">
                <div class="list-group-item message-panel-top message-panel-addition">List of users</div>
                <section class="message-panel">
                    <div class="list-group">
                        {{--<a href="{{ route("message.messageList") }}" class="list-group-item"> All </a>--}}
                        {{--@foreach($received as $user)--}}
                            {{--<a href="{{ route("message.messageList", $user) }}" class="list-group-item">{{ $user }}</a>--}}
                        {{--@endforeach--}}
                    </div>
                </section>
                <div class="list-group-item message-panel-bottom message-panel-addition"></div>
            </aside>
            <aside class="aside-send-message-panel">
                {{--<form action="{{ route("message.postMessage") }}" class="send-message-panel" method="POST">--}}
                    {{--{{ csrf_field() }}--}}
                    {{--<div class="form-group content-wrap">--}}
                        {{--@if ($errors->has('username'))--}}
                            {{--<span class="help-block">--}}
                                {{--<strong>{{ $errors->first('username') }}</strong>--}}
                            {{--</span>--}}
                        {{--@endif--}}
                        {{--<input name="username" type="text" class="form-control" id="username-msg-form" placeholder="Username" required>--}}
                        {{--<input name="title" type="text" class="form-control" id="title-msg-form" placeholder="Title" maxlength="26" required>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<textarea rows="6" name="message" class="form-control" id="message" placeholder="Your message" required></textarea>--}}
                    {{--</div>--}}

                    {{--<button type="submit" class="btn btn-default">Submit</button>--}}
                {{--</form>--}}
            </aside>
        </article>
        <article>
            <aside class="aside-messages-list">
                <div class="panel-group messages-list" id="accordion">


                    {{--@foreach($messages as $message)--}}
                        {{--<a class="panel panel-default" data-toggle="collapse" data-parent="#accordion" href="#{{ "collapse" . $loop->iteration }}">--}}
                            {{--<div class="panel-heading">--}}
                                {{--<h4 class="panel-title">--}}
                                    {{--@if(Auth::user()->username === $message->from ) {{ "You" }}--}}
                                    {{--@else {{ $message->from }}--}}
                                    {{--@endif--}}
                                    {{--<span class="badge">{{ $message->created_at }}</span>--}}
                                {{--</h4>--}}
                            {{--</div>--}}
                            {{--<div id="{{ "collapse" . $loop->iteration }}" class="panel-collapse collapse">--}}
                                {{--<div class="panel-body">{{ $message->message }}</div>--}}
                                {{--@if($message->seen !== NULL)--}}
                                    {{--seen: {{ $message->seen }}--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--@endforeach--}}

                </div>
            </aside>
        </article>
    </main>

@endsection