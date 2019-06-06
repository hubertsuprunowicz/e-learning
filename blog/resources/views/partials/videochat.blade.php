@extends('layouts.master')

@section('content')




        <section id="content-ajax" class="w-100">
            @if(count($lessons) < 2)
                <div class="embed-responsive embed-responsive-16by9 mt-5">
                    <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/137857207" allowfullscreen></iframe>
                </div>
            @else
                <div class="list-group list-lessons text-center container mb-5">
                    <br>
                    <strong>There is no any livestream now, checkout your future lesson below.</strong>
                    <br><br>
                    @forelse($lessons as $lesson)

                        @if($lesson->lesson->date < date(\Carbon\Carbon::now()))
                            <a href="{{ route('lesson.get', $lesson->lesson->id) }}" class="expired list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-2 h5">{{ $lesson->lesson->subject }}</h5>
                                    <strong class="text-mint">{{ $lesson->lesson->date }}</strong>
                                </div>
                                <p class="mb-2">{{ substr($lesson->lesson->description,0, 100) . "..." }}</p>
                                <small>Donec id elit non mi porta.</small>
                            </a>
                        @else
                            <a href="{{ route('lesson.get', $lesson->lesson->id) }}" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-2 h5">{{ $lesson->lesson->subject }}</h5>
                                    <strong class="text-mint">{{ $lesson->lesson->date }}</strong>
                                </div>
                                <p class="mb-2">{{ substr($lesson->lesson->description,0, 100) . "..." }}</p>
                                <small>Donec id elit non mi porta.</small>
                            </a>
                        @endif


                    @empty
                        <p>You have not joined to any lesson </p>
                    @endforelse
                </div>
            @endif
        </section>


@endsection