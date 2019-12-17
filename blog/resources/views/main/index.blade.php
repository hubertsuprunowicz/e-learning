@extends('layouts.master')


@section('content')

    <header class="no-repeat-img-header ">

        <div class="bg-container">

            <section class="choose-header">
                <span class="choose-holder">Choose</span>
            </section>

            <section class="student-header panel-header">
                <div class="speech-bubble">Lorem ipsum dolor sit amet, consectetur adipiscing. Nulla eu lorem. Mauris
                    sapien ipsum, condimentum atlacerat leo. Vivamus sit amet meros .
                </div>
                <div class="icon-holder">
                    <i class="fas fa-graduation-cap"></i>
                </div>
            </section>
            <section class="instructor-header panel-header">
                <div class="speech-bubble">ing elit.m. Mauris sapien ipsum, condimentum at mi vitae, bibendum leo.
                    Vivamus sit amet molestie neque. Suspendisse sed eros sagittis.
                </div>
                <div class="icon-holder">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
            </section>

            <section class="text-abs-header text-uppercase">
                @guest
                    <a href="{{ route('register') }}" class="text-abs-holder">
                        JOIN US
                    </a>
                @endguest
                @auth
                    <a href="{{ url('/') }}" class="text-abs-holder">
                        JOIN US
                    </a>
                @endauth
            </section>

            <span class="vertical-line-header"></span>

        </div>
    </header>


    <article>
        <section id="stat-info" class="stat-info">
            <h2 class="h2-responsive font-weight-bold text-center my-5">Just bragging</h2>

            <div class="card-group" id="counter">

                <div class="card">
                    <div class="d-flex flex-column">
                        <div class="counter"><span class="counter-value w-50 text-google" data-count="{{ $stats['lessonsHours'] }}">0</span></div>
                        <div class="w-50 text-google"><i class="fas fa-user-clock bragging-icon"></i></div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-google">Hours of lessons</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>


                <div class="card">
                    <div class="d-flex flex-column">
                        <div class="counter"><span class="counter-value w-50 text-twitter" data-count="{{ $stats['opinions'] }}">0</span>
                        </div>
                        <div class="w-50 text-twitter"><i class="fas fa-user-cog bragging-icon"></i></div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-twitter">5 star opinions</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="d-flex flex-column">
                        <div class="counter"><span class="counter-value w-50 text-facebook" data-count="{{ $stats['totalUsers'] }}">0</span>
                        </div>
                        <div class="w-50 text-facebook"><i class="fas fa-users bragging-icon"></i></div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-facebook">Satisfied users</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>

            </div>
        </section>

        <section class="offer-section d-flex flex-column">
            <h1 class="h1-responsive font-weight-bold text-center my-5">Lessons</h1>

            <div class="card-deck offer-card-deck justify-content-center align-content-around">

                @foreach($advertisements as $advertisement)

                    <div class="card adv-card">
                        <div class="card-body offer-card-body">
                            <div class="card-avatar">
                                <img src="{{ $advertisement->lesson->user->image }}" alt="...">
                                <h2 class="text-center avatar-text-card card-important-info text-mint">
                                    <strong>{{ $advertisement->lesson->subject }}</strong></h2>
                            </div>

                            <div class="d-flex flex-column align-content-center">
                                <p class="card-text pl-2">{{ substr($advertisement->lesson->description,0, 150)."..." }}</p>

                                <div class="align-items-end">
                                    <ul class="list-group list-group-flush card-list pl-2">
                                        <li class="list-group-item">
                                            Vacancies: <span class="card-important-info">
                                            {{ $advertisement->lesson->student_limit }}({{ $advertisement->lesson->student_limit - $advertisement->lesson->enroll->count() }} left)
                                        </span>
                                        </li>
                                        <li class="list-group-item">
                                            Video time: <span class="card-important-info">{{ $advertisement->lesson->length }}min</span>
                                        </li>
                                        <li class="list-group-item">
                                            Exam: <span class="card-important-info">none</span>
                                        </li>
                                        <li class="list-group-item">
                                            Price: <span class="card-important-info text-danger">{{ $advertisement->lesson->price }}$</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <small class="text-muted">updated {{ $advertisement->updated_at->diffForHumans() }}</small>
                            <a href="{{ route('lesson.get', $advertisement->lesson->id) }}"
                               class="card-btn d-block bg-mint">Check more</a>
                        </div>
                    </div>

                @endforeach
            </div>
            <a href="{{ route('lessons_page', 1) }}" class="btn btn-sm adv-button mt-5 mb-5 text-white">Show more..</a>

        </section>


        <section class="my-5 pt-3 pb-5">

            <!-- Section heading -->
            <h2 class="h1-responsive font-weight-bold text-center my-5">Why is it so great?</h2>
            <!-- Section description -->
            <p class="lead grey-text text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur
                adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                veniam.</p>

            <div class="row w-100 container-fluid">
                <div class="col-md-4 mb-md-0 mb-5">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-2">
                            <i class="fas fa-user-friends blue-text fa-2x"></i>
                        </div>
                        <div class="col-lg-10 col-md-9 col-10">
                            <h4 class="font-weight-bold">People</h4>
                            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-md-0 mb-5">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-2">
                            <i class="fas fa-dollar-sign green-text fa-2x"></i>
                        </div>
                        <div class="col-lg-10 col-md-9 col-10">
                            <h4 class="font-weight-bold">Money</h4>
                            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-2">
                            <i class="fas fa-tachometer-alt purple-text fa-2x"></i>
                        </div>
                        <div class="col-lg-10 col-md-9 col-10">
                            <h4 class="font-weight-bold">Support</h4>
                            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </article>


@endsection
