@extends('layouts.master')

@section('content')

    <section class="w-100">
        <div class="jumbotron text-center mt-5 d-flex flex-row flex-wrap justify-content-around lesson-holder">
            <div class="author-holder w-50">

                <div class="mb-4">
                    <div class="view overlay">
                        <h3>Author</h3>
                        <img class="card-img-top" src="{{ $lesson->user->image }}" alt="{{ $lesson->user->name }} img">
                        <div class="card-body">

                            <div>
                                <h4 class="card-title">{{ $lesson->user->first_name }}</h4>
                                <h4 class="card-title">{{ $lesson->user->last_name }}</h4>
                            </div>

                            <h6 class="text-uppercase grey-text mb-3">{{ $lesson->user->occupation }}</h6>

                            <p class="card-text">{{ $lesson->user->email }}</p>
                        </div>
                    </div>
                    <a href="{{ route("user.profile", $lesson->user->id) }}" class="btn adv-button text-white btn-md ">Read more</a>
                    <hr>
                </div>

            </div>


            <div class="lesson-info-holder d-flex flex-column align-content-center justify-content-between w-50">
                <h2 class="card-title h2">{{ $lesson->subject }}</h2>
                <ul class="list-group list-group-flush card-list pl-2 text-lg-center">
                    <li class="list-group-item">
                        <h3><span class="card-important-info text-danger">{{ $lesson->date }}</span></h3>
                    </li>
                    <li class="list-group-item">
                        <br>
                    </li>
                    <li class="list-group-item">
                        @if($lesson->student_limit === -1)
                            <h3><span class="card-important-info">Unlimited</span></h3>
                        @else
                            <h3>Vacancies: <span class="card-important-info">{{  $lesson->enroll->count() }} of {{ $lesson->student_limit }} enrolled to this lesson</span></h3>
                        @endif
                    </li>
                    <li class="list-group-item">
                        <h3>Video time: <span class="card-important-info">{{ $lesson->length }}min</span></h3>
                    </li>
                    <li class="list-group-item">
                        <h3>Exam: <span class="card-important-info">none</span></h3>
                    </li>
                    <li class="list-group-item">
                        <h3> Price: <span class="card-important-info">{{ $lesson->price }}$</span></h3>
                    </li>
                </ul>

                <div class="row d-flex justify-content-center">
                    <div class="col-xl-9 pl-1 pr-1">
                        <p class="card-text pl-3 pr-3">{{ $lesson->description }}</p>
                    </div>
                </div>

                <div class="pt-2 d-flex justify-content-center align-self-">
                    @if($lesson->date > date(\Carbon\Carbon::now()))
                        {{$lesson->date}}
                    <br/>
                    {{date(\Carbon\Carbon::now())}}
                    <form action="{{ route('lessonEnroll.post') }}" method="POST" class="d-flex flex-column">
                        {{ csrf_field() }}
                        <input name="lessonId" class="d-none" value="{{ $lesson->id }}">
                        <button type="submit" class="btn adv-button text-white">Join now <span class="far fa-gem ml-1"></span></button>
                        @if($errors->any())
                            <strong class="text-danger">{{ $errors->first() }}</strong>
                        @endif
                    </form>
                    @endif
                        @if($lesson->user->id === Auth::user()->id)
                            <a href="{{ route('lesson.edit.view', $lesson->user->id )}}" id="user-edit-btn" class="btn btn-primary btn-sm">
                                Edit
                            </a>
                        @endif
                        <form method="POST" action="{{ route('report.create') }}">
                            {{ csrf_field() }}
                            <label>
                                <input type="number" value="{{$lesson->id}}" name="id" hidden/>
                            </label>
                            <label>
                                <input type="text" value="LESSON" name="type" hidden/>
                            </label>
                            <button type="submit" class="btn btn-danger">Report</button>
                        </form>
                </div>
            </div>


        </div>


    </section>
@endsection
