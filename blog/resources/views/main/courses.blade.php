@extends('layouts.master')

@section('content')


    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header mt-5">
                <h3>Bootstrap Sidebar</h3>
            </div>

            <ul class="nav-item list-unstyled components text-center">
                <li class="active dropdown-item">
                    <a href="#">Classifieds</a>
                </li>
                <li class="dropdown-item">
                    <a href="#">Your </a>
                </li>
                <li class="dropdown-item">
                    <a href="#">About</a>
                </li>
                <li class="dropdown-item">
                    <a href="#">About</a>
                </li>
            </ul>
        </nav>





        <section id="toggle-content" class="offer-section">

            <button type="button" id="sidebarCollapse" class="btn btn-info">
                <i class="fas fa-align-left"></i>
                <span>Menu</span>
            </button>



            <h2 class="h1-responsive font-weight-bold text-center my-5">Classifieds</h2>

            <div class="card-deck offer-card-deck justify-content-center align-content-around">

                <div class="card">
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

                <div class="card ">
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

                <div class="card">
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

                <div class="card">
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

                <div class="card">
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

                <div class="card">
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

            <h4 class="text-center mb-5"><a class="btn btn-outline-theme" href="#">Show more..</a></h4>

        </section>

    </div>








@endsection