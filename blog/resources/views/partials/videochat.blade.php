@extends('layouts.master')

@section('content')




    <section id="content-ajax" class="w-100">
        @if(!is_iterable($lessons))

            <div class="embed-responsive embed-responsive-16by9 mt-5">
                <iframe width="560" height="315" src="{{ $lessons->lesson->video_link }}"
                        frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>

            <form class="rating-form" id="rating-movie" name="rating-movie">
                <fieldset class="form-group">

                    <legend class="form-legend">Rating:</legend>

                    <div class="form-item">

                        <input id="rating-5" name="rating" type="radio" value="5"/>
                        <label for="rating-5" data-value="5">
        <span class="rating-star">
          <i class="fa fa-star-o"></i>
          <i class="fa fa-star"></i>
        </span>
                            <span class="ir">5</span>
                        </label>
                        <input id="rating-4" name="rating" type="radio" value="4"/>
                        <label for="rating-4" data-value="4">
        <span class="rating-star">
          <i class="fa fa-star-o"></i>
          <i class="fa fa-star"></i>
        </span>
                            <span class="ir">4</span>
                        </label>
                        <input id="rating-3" name="rating" type="radio" value="3"/>
                        <label for="rating-3" data-value="3">
        <span class="rating-star">
          <i class="fa fa-star-o"></i>
          <i class="fa fa-star"></i>
        </span>
                            <span class="ir">3</span>
                        </label>
                        <input id="rating-2" name="rating" type="radio" value="2"/>
                        <label for="rating-2" data-value="2">
        <span class="rating-star">
          <i class="fa fa-star-o"></i>
          <i class="fa fa-star"></i>
        </span>
                            <span class="ir">2</span>
                        </label>
                        <input id="rating-1" name="rating" type="radio" value="1"/>
                        <label for="rating-1" data-value="1">
        <span class="rating-star">
          <i class="fa fa-star-o"></i>
          <i class="fa fa-star"></i>
        </span>
                            <span class="ir">1</span>
                        </label>

                        <div class="form-action">
                            <input id="rating-submit" class="btn-reset" type="submit" data-index={{$lessons->lesson->author_id}} value="Submit"/>
                        </div>

                    </div>

                </fieldset>
                <label>
                    <textarea id="details" name="details" class="form-control opinion-details" data-index="test" cols="30" rows="3"></textarea>
                </label>
            </form>
        @else
            <div class="list-group list-lessons text-center container mb-5">
                <br>
                <strong>There is no any livestream now, checkout your future lessons below.</strong>
                <br><br>
                @forelse($lessons as $lesson)
                    @if($lesson->lesson->date < date(\Carbon\Carbon::now()))
                        <a href="{{ route('lesson.get', $lesson->lesson->id) }}"
                           class="expired list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-2 h5">{{ $lesson->lesson->subject }}</h5>
                                <strong class="text-mint">{{ $lesson->lesson->date }}</strong>
                            </div>
                            <p class="mb-2">{{ substr($lesson->lesson->description,0, 100) . "..." }}</p>
                            <small>Donec id elit non mi porta.</small>
                        </a>
                    @else
                        <a href="{{ route('lesson.get', $lesson->lesson->id) }}"
                           class="list-group-item list-group-item-action flex-column align-items-start">
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
