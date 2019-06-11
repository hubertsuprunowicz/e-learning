@extends('layouts.master')

@section('content')


<form action="{{ route('user.edit', $user->id) }}" method="POST" class="">
    {{ csrf_field() }}
    {{ method_field('put') }}

    <header class="user-header">
        <section class="profile-holder container-fluid">
                <div class="card card-profile">
                    @if($user->id === Auth::user()->id)
                        <img class="card-img-top" src="{{ $user->image }}" alt="{{ $user->name }} img"> {{-- EDITABLE --}}
                        <input type="text" name="image" class="user-info input-edit-avatar card-img-top input-edit-profile" value="{{ $user->image }}" minlength="10" readonly>

                        <div class="card-body">
                            <div class="personal-details">
                                <input type="text" name="firstName" class="user-info card-title title-one input-edit-profile" minlength="4" value="{{ $user->first_name }}" readonly>
                                <input type="text" name="lastName" class="user-info card-title title-one input-edit-profile" minlength="4" value="{{ $user->last_name }}" readonly>
                            </div>
                            <input type="text" name="occupation" class="user-info mb-3 input-edit-profile" minlength="4" maxlength="20" placeholder="{{ empty($user->occupation) ? "occupation/title/position" : "" }}" value="{{ empty($user->occupation) ? "" : $user->occupation }}" readonly>
                            <p class="card-meta">Joined in {{ $user->created_at->diffForHumans() }}</p>
                            <hr>
                            <div class="container">
                                <div class="starrating risingstar d-flex justify-content-center flex-row-reverse">
                                    <span class="rating-avg">{{ empty($user->opinions->avg('rating')) ? 0 : $user->opinions->avg('rating') }}</span>
                                    <span class="rating-avg">Rating: </span>
                                    {{--<input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="5 star"></label>--}}
                                    {{--<input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="4 star"></label>--}}
                                    {{--<input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="3 star"></label>--}}
                                    {{--<input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2 star"></label>--}}
                                    {{--<input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="1 star"></label>--}}
                                </div>
                                <div class="opinion-holder mt-3"><a href="#opinions" class="text-mint">Opinions<span class="badge badge-success ml-2">5</span></a></div>
                            </div>
                        </div>
                        <button type="button" id="user-edit-btn" class="btn btn-primary btn-sm " role="button">Edit</button>
                        <button type="submit" id="user-save-btn" class="btn btn-danger btn-sm " role="button">Save</button>
                    @else
                        <img class="card-img-top" src="{{ $user->image }}" alt="{{ $user->name }} img">
                        <div class="card-body">

                            <div class="personal-details">
                                <h4 class="card-title title-one">{{ $user->first_name }}</h4>
                                <h4 class="card-title title-one">{{ $user->last_name }}</h4>
                            </div>

                            <h6 class="text-uppercase grey-text mb-3">{{ $user->occupation }}</h6>
                            <p class="card-meta">Joined in {{ $user->created_at->diffForHumans() }}</p>
                            <hr>
                            <div class="container">
                                <div class="starrating risingstar d-flex justify-content-center flex-row-reverse">
                                    <span class="rating-avg">{{ empty($user->opinions->avg('rating')) ? 0 : $user->opinions->avg('rating') }}</span>
                                    <span class="rating-avg">Rating: </span>
                                    {{--<input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="5 star"></label>--}}
                                    {{--<input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="4 star"></label>--}}
                                    {{--<input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="3 star"></label>--}}
                                    {{--<input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2 star"></label>--}}
                                    {{--<input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="1 star"></label>--}}
                                </div>
                                <div class="opinion-holder mt-3"><a href="#opinions" class="text-mint ">Opinions<span class="badge badge-success ml-2">{{ $user->opinions->count() }}</span></a></div>
                            </div>
                        </div>
                    @endif
                </div>



            <div class="card-profile">
                <div class="card-body">
                    {{--<form>--}}
                        {{--<p class="h4 text-center py-4">Text me!</p>--}}

                        {{--<label for="defaultFormCardNameEx" class="grey-text font-weight-light">Title</label>--}}
                        {{--<input type="text" id="defaultFormCardNameEx" class="form-control" required>--}}
                        {{--<br>--}}

                        {{--<label for="defaultFormCardEmailEx" class="grey-text font-weight-light">Your message</label>--}}
                        {{--<textarea id="defaultFormCardEmailEx" class="form-control" rows="14" minlength="" required></textarea>--}}

                        {{--<div class="text-center py-4 mt-3">--}}
                            {{--<button class="btn btn-sm adv-button" type="submit">Send</button>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                </div>
            </div>
        </section>
    </header>

    @if(isset($user->about))
        <article class="mt-5">
            <section class="container-fluid">
                <div class=" text-center p-4 d-flex flex-wrap-reverse">
                    <div class="col-md-7 text-md-left ml-3 mt-3" >
                        <span  class="green-text ">
                            <h4 class="h4 pb-1 mt-2"><i class="fas fa-user pr-1"></i> About Me</h4>
                        </span>
                        @if($user->id === Auth::user()->id)
                            <textarea type="text" name="about" class="user-info font-weight-normal input-edit-about input-edit-profile" minlength="20" rows="5" readonly>{{ $user->about }}</textarea>
                        @else
                            <p class="font-weight-normal">{{ $user->about }}</p>
                        @endif
                    </div>
                </div>
            </section>
        </article>
    @endif

</form>

@if(isset($user->opinions ))
    <aside class="mt-5 mb-5">
        <section id="opinions" class="container-fluid ">
                <div class="card-columns">
                    @foreach($user->opinions as $opinion)
                        @break($opinion->details == "")
                        <div class="card testimonial-card mt-2 mb-3 ">
                            <div class="card-body">
                                <h4 class="card-title font-weight-bold">{{ $opinion->user->name }}</h4>
                                <hr>
                                <blockquote><i class="fas fa-quote-left"></i>{{ $opinion->details }}</blockquote>
                                <p class="quote-date"><i>{{ $opinion->created_at }}</i></p>
                            </div>
                        </div>
                    @endforeach
                </div>
        </section>
    </aside>
@endif

@endsection