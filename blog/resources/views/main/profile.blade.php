@extends('layouts.master')

@section('content')

    <header class="user-header">
        <section class="profile-holder container-fluid">
            <div class="card card-profile">
                @if($user->id === Auth::user()->id)
                    <img class="card-img-top" src="{{ $user->image }}"
                         alt="{{ $user->name }} img"> {{-- EDITABLE --}}
                    <div class="card-body">
                        <div class="personal-details">
                            <div
                                class="user-info card-title title-one input-edit-profile"
                                value="">{{ $user->first_name }}</div>
                            <div
                                class="user-info card-title title-one input-edit-profile"
                            >{{ $user->last_name }}</div>
                        </div>
                        <div class="user-info mb-3 input-edit-profile"
                             >{{ empty($user->occupation) ? "" : $user->occupation }}</div>
                        <p class="card-meta">Joined in {{ $user->created_at->diffForHumans() }}</p>
                        <hr>
                        <div class="container">
                            <div class="starrating risingstar d-flex justify-content-center flex-row-reverse">
                                    <span
                                        class="rating-avg">{{ empty($user->opinions->avg('rating')) ? 0 : $user->opinions->avg('rating') }}</span>
                                <span class="rating-avg">Rating: </span>
                            </div>
                            <div class="opinion-holder mt-3"><a href="#opinions" class="text-mint ">Opinions<span
                                        class="badge badge-success ml-2">{{ $user->opinions->count() }}</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="edit-profile-wrapper">
                        <a href="{{ route('user.edit.view', $user->id )}}" id="user-edit-btn" class="btn btn-primary btn-sm">
                            Edit
                        </a>
                    </div>
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
                                    <span
                                        class="rating-avg">{{ empty($user->opinions->avg('rating')) ? 0 : $user->opinions->avg('rating') }}</span>
                                <span class="rating-avg">Rating: </span>
                            </div>
                            <div class="opinion-holder mt-3"><a href="#opinions" class="text-mint ">Opinions<span
                                        class="badge badge-success ml-2">{{ $user->opinions->count() }}</span></a>
                            </div>
                        </div>
                    </div>
                @endif
            </div>


            <div class="card-profile">
                <div class="card-body">
                    <form method="POST" action="{{ route('message.create') }}">
                        @csrf

                        <p class="h4 text-center py-4">Text me!</p>
                        <input type="text" id="usernameForm" class="form-control" value="{{ $user->name}}" name="sent_to" hidden>
                        @if($errors->any())
                            <strong class="text-danger">{{ $errors->first() }}</strong>
                        @endif

                        <label for="defaultFormCardNameEx" class="grey-text font-weight-light">Title</label>
                        <input type="text"  name="title" id="defaultFormCardNameEx" class="form-control" required>
                        <br>

                        <label for="defaultFormCardEmailEx" class="grey-text font-weight-light">Your message</label>
                        <textarea id="defaultFormCardEmailEx" name="body" class="form-control" rows="14" minlength=""
                                  required></textarea>

                        <div class="text-center py-4 mt-3">
                            <button class="btn btn-sm adv-button" type="submit">Send</button>
                        </div>
                    </form>
                    <div class="text-center py-4 mt-3">
                        <form method="POST" action="{{ route('report.create') }}">
                            {{ csrf_field() }}
                            <label>
                                <input type="number" value="{{$user->id}}" name="id" hidden/>
                            </label>
                            <label>
                                <input type="text" value="USER" name="type" hidden/>
                            </label>
                            <button type="submit" class="btn btn-danger">Report</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </header>

    @if(isset($user->about))
        <article class="mt-5">
            <section class="container-fluid">
                <div class=" text-center p-4 d-flex flex-wrap-reverse">
                    <div class="col-md-7 text-md-left ml-3 mt-3">
                        <span class="green-text ">
                            <h4 class="h4 pb-1 mt-2"><i class="fas fa-user pr-1"></i> About Me</h4>
                        </span>
                        @if($user->id === Auth::user()->id)
                            <textarea type="text" name="about"
                                      class="user-info font-weight-normal input-edit-about input-edit-profile"
                                      minlength="20" rows="5" readonly>{{ $user->about }}</textarea>
                        @else
                            <p class="font-weight-normal">{{ $user->about }}</p>
                        @endif
                    </div>
                </div>
            </section>
        </article>
    @endif
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
