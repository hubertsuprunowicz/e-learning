@extends('layouts.master')

@section('content')

    <section id="content-ajax" class="w-100">
        <div class="list-group list-lessons text-center container">
            @forelse($lessons as $lesson)
                @if($lesson->date < date(\Carbon\Carbon::now()))
                    <a href="{{ route('lesson.get', $lesson->id) }}" class="expired list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-2 h5">{{ $lesson->subject }}</h5>
                            <small>{{ $lesson->date }}</small>
                        </div>
                        <p class="mb-2">{{ substr($lesson->description,0, 100) . "..." }}</p>
                        <small>Donec id elit non mi porta.</small>
                    </a>
                    <form action="{{ route('lesson.delete', $lesson->id) }}" class="d-flex flex-row align-content-start" method="post">
                        {{ method_field('DELETE') }}
                        @csrf
                        <input class="btn btn-danger btn-delete" type="submit" value="DELETE" />
                    </form>
                @else
                    <a href="{{ route('lesson.get', $lesson->id) }}" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-2 h5">{{ $lesson->subject }}</h5>
                            <small>{{ $lesson->date }}</small>
                        </div>
                        <p class="mb-2">{{ substr($lesson->description,0, 100) . "..." }}</p>
                        <small>Donec id elit non mi porta.</small>
                    </a>

                    <form action="{{ route('lesson.delete', $lesson->id) }}" class="d-flex flex-row align-content-start" method="post">
                        {{ method_field('DELETE') }}
                        @csrf
                        <input class="btn btn-danger btn-delete" type="submit" value="DELETE" />
                    </form>
                    {{--<a class="btn btn-danger btn-delete" href="{{ route('lesson.delete', $lesson->id) }}">DELETE</a>--}}
                @endif

            @empty
                <p>You have not created any lesson </p>
            @endforelse
        </div>
    </section>
@endsection
