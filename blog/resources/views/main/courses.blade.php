@extends('layouts.master')

@section('content')


    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header mt-5">
                <h3>Find your wanted course</h3>
            </div>

            <ul id="topheader" class="navbar-nav list-unstyled components text-center">
                <li class="active dropdown-item">
                    <a id="classifieds-ajax">Classifieds</a>
                </li>
                <li class="dropdown-item">
                    <a id="your-ajax">Your </a>
                </li>
                <li class="dropdown-item">
                    <a id="about-ajax">Add lesson</a>
                </li>
                <li class="dropdown-item">
                    <a>About</a>
                </li>
            </ul>
        </nav>



        <section id="toggle-content" class="offer-section w-100">

            <button type="button" id="sidebarCollapse" class="btn btn-info">
                <i class="fas fa-align-left"></i>
                <span>Menu</span>
            </button>


            <section id="content-ajax" class="w-100">
                <div class="input-group md-form form-sm form-2 pl-0 search-position d-flex justify-content-center">

                    <input id="search" class="form-control my-0 py-1 " type="text" placeholder="Search" aria-label="Search" autocomplete="off">
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-text1"><i class="fas fa-search text-grey" aria-hidden="true"></i></span>
                    </div>
                    <ul class="list-group" id="result"></ul>

                </div>


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
                            <button class="card-btn btn-info">Check more</button>
                        </div>
                    </div>


                    <div class="card adv-card">
                        <div class="card-body offer-card-body">
                            <div>
                                <img src="https://facefacts.scot/images/science/Q2_high_health_f.jpg"  alt="...">
                            </div>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>

                    <div class="card adv-card">
                        <div class="card-body offer-card-body">
                            <div>
                                <img src="https://facefacts.scot/images/science/Q2_high_health_f.jpg" alt="...">
                            </div>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>

                    <div class="card adv-card">
                        <div class="card-body offer-card-body">
                            <div>
                                <img src="https://facefacts.scot/images/science/Q2_high_health_f.jpg"  alt="...">
                            </div>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>

                    <div class="card adv-card">
                        <div class="card-body offer-card-body">
                            <div>
                                <img src="https://facefacts.scot/images/science/Q2_high_health_f.jpg"  alt="...">
                            </div>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>

                    <div class="card adv-card">
                        <div class="card-body offer-card-body">
                            <div>
                                <img src="https://facefacts.scot/images/science/Q2_high_health_f.jpg" alt="...">
                            </div>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>

                </div>
            </section>


        </section>

    </div>








@endsection