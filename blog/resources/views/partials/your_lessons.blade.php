@extends('layouts.master')

@section('content')

    <section id="content-ajax" class="w-100">
        <div class="list-group list-lessons">


            @foreach($lessons as $lesson)

            <a href="{{ route('lesson.get'), $lesson->id }}" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-2 h5">{{ $lesson->subject }}</h5>
                    <small>{{ $lesson->created_at }}</small>
                </div>
                <p class="mb-2">{{ substr($lesson->description,0, 100)."..." }}</p>
                <small>Donec id elit non mi porta.</small>
            </a>

            @endforeach

        </div>
    </section>
@endsection