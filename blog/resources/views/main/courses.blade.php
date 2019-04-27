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
                    <a id="active-ajax">Active lesson</a>
                </li>
                <li class="dropdown-item">
                    <a id="add-l-ajax">Add lesson</a>
                </li>
                <li class="dropdown-item">
                    <a id="your-l-ajax" data-index="{{ Auth::user()->id }}">Your lessons</a>
                </li>
            </ul>
        </nav>



        <section id="toggle-content" class="offer-section w-100">

            <button type="button" id="sidebarCollapse" class="btn adv-button text-white">
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

                <div class="card-deck offer-card-deck justify-content-center align-content-around mt-5">
                    @foreach($lessons as $lesson)
                        <div class="card adv-card">
                            <div class="card-body offer-card-body" >
                                <div class="card-avatar">
                                    <img src="{{ $lesson->user->image }}"  alt="{{ $lesson->user->name }} img">
                                    <h2 class="text-center avatar-text-card card-important-info text-mint"><strong>{{ $lesson->subject }}</strong></h2>
                                </div>

                                <div class="d-flex flex-column align-content-center">
                                    <p class="card-text pl-2">{{ substr($lesson->description,0, 150)."..." }}</p>

                                    <div class="align-items-end">
                                        <ul class="list-group list-group-flush card-list pl-2">
                                            <li class="list-group-item">
                                                Vacancies: <span class="card-important-info">0 of {{ $lesson->student_limit }}</span>
                                            </li>
                                            <li class="list-group-item">
                                                Video time: <span class="card-important-info">{{ $lesson->length }}min</span>
                                            </li>
                                            <li class="list-group-item">
                                                Exam: <span class="card-important-info">none</span>
                                            </li>
                                            <li class="list-group-item">
                                                Price: <span class="card-important-info text-danger">{{ $lesson->price }}$</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">
                                <small class="text-muted">{{ $lesson->updated_at->diffForHumans() }}</small>
                                <a href="{{ route('lesson.get', $lesson->id) }}" class="card-btn d-block bg-mint">Check more</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </section>


        </section>

    </div>








@endsection