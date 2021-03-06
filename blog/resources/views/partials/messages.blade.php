@extends('layouts.master')

@section('content')

    <main class="main-messages ">
        <div class="container ">
            <h2 class="h2-responsive text-center my-5">Messages</h2>
            <div class="messaging">

                <div class="inbox_msg d-flex flex-row flex-wrap justify-content-center w-100" id="inbox">
                    <div class="inbox_people inbox-p">
                        <div class="headind_srch">
                            <div class="recent_heading">
                                <h4>Recent</h4>
                            </div>
                        </div>
                        <div class="inbox_chat card-body">
                            @foreach($messages as $message)
                                <div class="chat_list active_chat">
                                    <div class="chat_people">
                                        <div class="chat_img"><img src="{{ $message->user->image }}" alt="avatar img">
                                        </div>
                                        <div class="chat_ib">
                                            <h5>{{ $message->user->name }}<span
                                                        class="chat_date">{{ $message->created_at }}</span></h5>
                                            <h6><strong>{{ $message->title }}</strong></h6>
                                            <p>{{ $message->message }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>


                    <div class="card-profile">
                        <div class="card-body">

                            <form method="POST" action="{{ route('message.create') }}">
                                @csrf
                                <label for="usernameForm" class="grey-text font-weight-light">Username</label>
                                <input type="text" id="usernameForm" class="form-control" name="sent_to" required>

                                @if($errors->any())
                                    <strong class="text-danger">{{ $errors->first() }}</strong>
                                @endif

                                <label for="defaultFormCardNameEx" class="grey-text font-weight-light">Title</label>
                                <input type="text" id="defaultFormCardNameEx" class="form-control" name="title"
                                       minlength="5" required>

                                <br>

                                <label for="messageForm" class="grey-text font-weight-light">Your message</label>
                                <textarea id="messageForm" class="form-control" name="body" rows="14" minlength="5"
                                          required></textarea>

                                <div class="text-center py-4 mt-3">
                                    <input class="btn btn-sm adv-button text-white" type="submit" value="Send">
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>

@endsection
