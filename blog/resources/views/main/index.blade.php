@extends('layouts.master')


@section('content')

    <header class="no-repeat-img-header ">

        <div class="bg-container">

            <section class="choose-header">
                <span class="choose-holder">Choose</span>
            </section>


            <section class="student-header panel-header">
                <div class="speech-bubble">Lorem ipsum dolor sit amet, consectetur adipiscing. Nulla eu lorem. Mauris sapien ipsum, condimentum atlacerat leo. Vivamus sit amet meros .
                </div>
                <div class="icon-holder">
                    <i class="fas fa-graduation-cap"></i>
                </div>
            </section>
            <section class="instructor-header panel-header">
                <div class="speech-bubble">ing elit.m. Mauris sapien ipsum, condimentum at mi vitae, bibendum leo. Vivamus sit amet molestie neque. Suspendisse sed eros sagittis.
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

        <section class="stat-info">
            <h2 class="h1-responsive font-weight-bold text-center my-5">Just bragging</h2>

            <div class="card-group" id="counter">

                <div class="card">
                    <div class="d-flex flex-column">
                        <div class="counter"><span class="counter-value w-50 text-google" data-count="14">0</span></div>
                        <div class="w-50 text-google"><i class="fas fa-user-clock bragging-icon"></i></div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-google">Lorem ipsum</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>


                <div class="card">
                    <div class="d-flex flex-column">
                        <div class="counter"><span class="counter-value w-50 text-twitter" data-count="254">0</span></div>
                        <div class="w-50 text-twitter"><i class="fas fa-user-cog bragging-icon"></i></div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-twitter">Lorem ipsum</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="d-flex flex-column">
                        <div class="counter"><span class="counter-value w-50 text-facebook" data-count="1467">0</span></div>
                        <div class="w-50 text-facebook"><i class="fas fa-users bragging-icon"></i></div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-facebook">Lorem ipsum</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>

            </div>
        </section>


        <section class="offer-section d-flex flex-column">
            <h2 class="h1-responsive font-weight-bold text-center my-5">Classifieds</h2>

            <div class="card-deck offer-card-deck justify-content-center align-content-around">

                <div class="card adv-card">
                    <div class="card-body offer-card-body" >
                        <div class="card-avatar">
                            <img src="https://facefacts.scot/images/science/Q2_high_health_f.jpg"  alt="...">
                            <h5 class="text-center avatar-text-card card-important-info"><strong>HTML lesson</strong></h5>
                        </div>

                        <div class="d-flex flex-column align-content-center">
                            <p class="card-text pl-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at eleifend leo, ut ultrices leo. Pellentesque malesuada purus a accumsan lobortis.</p>

                            <div class="align-items-end">
                                <ul class="list-group list-group-flush card-list pl-2">
                                    <li class="list-group-item">
                                        Vacancies: <span class="card-important-info">3 of 10</span>
                                    </li>
                                    <li class="list-group-item">
                                        Video time: <span class="card-important-info">320min</span>
                                    </li>
                                    <li class="list-group-item">
                                        Exam: <span class="card-important-info">none</span>
                                    </li>
                                    <li class="list-group-item">
                                        Price: <span class="card-important-info">60$</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                        <a href="{{ route('lesson.get'), 1 }}" class="card-btn btn-success d-block">Check more</a>
                    </div>
                </div>

                <div class="card adv-card">
                    <div class="card-body offer-card-body" >
                        <div class="card-avatar">
                            <img src="https://facefacts.scot/images/science/Q2_high_health_f.jpg"  alt="...">
                            <h5 class="text-center avatar-text-card card-important-info"><strong>HTML lesson</strong></h5>
                        </div>

                        <div class="d-flex flex-column align-content-center">
                            <p class="card-text pl-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at eleifend leo, ut ultrices leo. Pellentesque malesuada purus a accumsan lobortis.</p>

                            <div class="align-items-end">
                                <ul class="list-group list-group-flush card-list pl-2">
                                    <li class="list-group-item">
                                        Vacancies: <span class="card-important-info">3 of 10</span>
                                    </li>
                                    <li class="list-group-item">
                                        Video time: <span class="card-important-info">320min</span>
                                    </li>
                                    <li class="list-group-item">
                                        Exam: <span class="card-important-info">none</span>
                                    </li>
                                    <li class="list-group-item">
                                        Price: <span class="card-important-info">60$</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                        <a href="{{ route('lesson.get'), 1 }}" class="card-btn btn-success d-block">Check more</a>
                    </div>
                </div>

                <div class="card adv-card">
                    <div class="card-body offer-card-body" >
                        <div class="card-avatar">
                            <img src="https://facefacts.scot/images/science/Q2_high_health_f.jpg"  alt="...">
                            <h5 class="text-center avatar-text-card card-important-info"><strong>HTML lesson</strong></h5>
                        </div>

                        <div class="d-flex flex-column align-content-center">
                            <p class="card-text pl-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at eleifend leo, ut ultrices leo. Pellentesque malesuada purus a accumsan lobortis.</p>

                            <div class="align-items-end">
                                <ul class="list-group list-group-flush card-list pl-2">
                                    <li class="list-group-item">
                                        Vacancies: <span class="card-important-info">3 of 10</span>
                                    </li>
                                    <li class="list-group-item">
                                        Video time: <span class="card-important-info">320min</span>
                                    </li>
                                    <li class="list-group-item">
                                        Exam: <span class="card-important-info">none</span>
                                    </li>
                                    <li class="list-group-item">
                                        Price: <span class="card-important-info">60$</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                        <a href="{{ route('lesson.get'), 1 }}" class="card-btn btn-success d-block">Check more</a>
                    </div>
                </div>

                <div class="card adv-card">
                    <div class="card-body offer-card-body" >
                        <div class="card-avatar">
                            <img src="https://facefacts.scot/images/science/Q2_high_health_f.jpg"  alt="...">
                            <h5 class="text-center avatar-text-card card-important-info"><strong>HTML lesson</strong></h5>
                        </div>

                        <div class="d-flex flex-column align-content-center">
                            <p class="card-text pl-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at eleifend leo, ut ultrices leo. Pellentesque malesuada purus a accumsan lobortis.</p>

                            <div class="align-items-end">
                                <ul class="list-group list-group-flush card-list pl-2">
                                    <li class="list-group-item">
                                        Vacancies: <span class="card-important-info">3 of 10</span>
                                    </li>
                                    <li class="list-group-item">
                                        Video time: <span class="card-important-info">320min</span>
                                    </li>
                                    <li class="list-group-item">
                                        Exam: <span class="card-important-info">none</span>
                                    </li>
                                    <li class="list-group-item">
                                        Price: <span class="card-important-info">60$</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                        <a href="{{ route('lesson.get'), 1 }}" class="card-btn btn-success d-block">Check more</a>
                    </div>
                </div>

                <div class="card adv-card">
                    <div class="card-body offer-card-body" >
                        <div class="card-avatar">
                            <img src="https://facefacts.scot/images/science/Q2_high_health_f.jpg"  alt="...">
                            <h5 class="text-center avatar-text-card card-important-info"><strong>HTML lesson</strong></h5>
                        </div>

                        <div class="d-flex flex-column align-content-center">
                            <p class="card-text pl-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at eleifend leo, ut ultrices leo. Pellentesque malesuada purus a accumsan lobortis.</p>

                            <div class="align-items-end">
                                <ul class="list-group list-group-flush card-list pl-2">
                                    <li class="list-group-item">
                                        Vacancies: <span class="card-important-info">3 of 10</span>
                                    </li>
                                    <li class="list-group-item">
                                        Video time: <span class="card-important-info">320min</span>
                                    </li>
                                    <li class="list-group-item">
                                        Exam: <span class="card-important-info">none</span>
                                    </li>
                                    <li class="list-group-item">
                                        Price: <span class="card-important-info">60$</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                        <a href="{{ route('lesson.get'), 1 }}" class="card-btn btn-success d-block">Check more</a>
                    </div>
                </div>

                <div class="card adv-card">
                    <div class="card-body offer-card-body" >
                        <div class="card-avatar">
                            <img src="https://facefacts.scot/images/science/Q2_high_health_f.jpg"  alt="...">
                            <h5 class="text-center avatar-text-card card-important-info"><strong>HTML lesson</strong></h5>
                        </div>

                        <div class="d-flex flex-column align-content-center">
                            <p class="card-text pl-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at eleifend leo, ut ultrices leo. Pellentesque malesuada purus a accumsan lobortis.</p>

                            <div class="align-items-end">
                                <ul class="list-group list-group-flush card-list pl-2">
                                    <li class="list-group-item">
                                        Vacancies: <span class="card-important-info">3 of 10</span>
                                    </li>
                                    <li class="list-group-item">
                                        Video time: <span class="card-important-info">320min</span>
                                    </li>
                                    <li class="list-group-item">
                                        Exam: <span class="card-important-info">none</span>
                                    </li>
                                    <li class="list-group-item">
                                        Price: <span class="card-important-info">60$</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                        <a href="{{ route('lesson.get'), 1 }}" class="card-btn btn-success d-block">Check more</a>
                    </div>
                </div>

                <div class="card adv-card">
                    <div class="card-body offer-card-body" >
                        <div class="card-avatar">
                            <img src="https://facefacts.scot/images/science/Q2_high_health_f.jpg"  alt="...">
                            <h5 class="text-center avatar-text-card card-important-info"><strong>HTML lesson</strong></h5>
                        </div>

                        <div class="d-flex flex-column align-content-center">
                            <p class="card-text pl-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at eleifend leo, ut ultrices leo. Pellentesque malesuada purus a accumsan lobortis.</p>

                            <div class="align-items-end">
                                <ul class="list-group list-group-flush card-list pl-2">
                                    <li class="list-group-item">
                                        Vacancies: <span class="card-important-info">3 of 10</span>
                                    </li>
                                    <li class="list-group-item">
                                        Video time: <span class="card-important-info">320min</span>
                                    </li>
                                    <li class="list-group-item">
                                        Exam: <span class="card-important-info">none</span>
                                    </li>
                                    <li class="list-group-item">
                                        Price: <span class="card-important-info">60$</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                        <a href="{{ route('lesson.get'), 1 }}" class="card-btn btn-success d-block">Check more</a>
                    </div>
                </div>

                <div class="card adv-card">
                    <div class="card-body offer-card-body" >
                        <div class="card-avatar">
                            <img src="https://facefacts.scot/images/science/Q2_high_health_f.jpg"  alt="...">
                            <h5 class="text-center avatar-text-card card-important-info"><strong>HTML lesson</strong></h5>
                        </div>

                        <div class="d-flex flex-column align-content-center">
                            <p class="card-text pl-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at eleifend leo, ut ultrices leo. Pellentesque malesuada purus a accumsan lobortis.</p>

                            <div class="align-items-end">
                                <ul class="list-group list-group-flush card-list pl-2">
                                    <li class="list-group-item">
                                        Vacancies: <span class="card-important-info">3 of 10</span>
                                    </li>
                                    <li class="list-group-item">
                                        Video time: <span class="card-important-info">320min</span>
                                    </li>
                                    <li class="list-group-item">
                                        Exam: <span class="card-important-info">none</span>
                                    </li>
                                    <li class="list-group-item">
                                        Price: <span class="card-important-info">60$</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                        <a href="{{ route('lesson.get'), 1 }}" class="card-btn btn-success d-block">Check more</a>
                    </div>
                </div>

            </div>


            <a href="{{ route('listOfLessons.get') }}" class="btn btn-sm adv-button mt-5 mb-5 text-white">Show more..</a>

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
                            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
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
                            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
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
                            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>

                    </div>

                </div>

            </div>

        </section>


    </article>


@endsection
