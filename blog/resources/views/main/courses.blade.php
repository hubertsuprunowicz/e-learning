@extends('layouts.master')

@section('content')


    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">

            <div id="lesson-slogan" class="sidebar-header mt-5">
                <h3>Find your wanted lesson</h3>
            </div>

            <ul id="topheader" class="navbar-nav list-unstyled components text-center">
                <li class="active dropdown-item">
                    <a id="classifieds-ajax">Lessons</a>
                </li>
                <li class="dropdown-item">
                    <a id="active-ajax">Livestream</a>
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

            <div class="mt-5 text-center"><h2>Lessons</h2></div>


            <section id="content-ajax" class="w-100">

                <div class="card-deck offer-card-deck justify-content-center align-content-around mt-5">
                    @for ($i = $startRange; $i <= $endRange; $i++)
                        @break( empty($lessons[$i]) )

                        <!-- No reason to show lesson without vacancies -->
                        @continue( $lessons[$i]->student_limit - $lessons[$i]->enroll->count() <= 0 )
                        <div class="card adv-card">
                            <div class="card-body offer-card-body" >
                                <div class="card-avatar">
                                    <img src="{{ $lessons[$i]->user->image }}"  alt="{{ $lessons[$i]->user->name }} img">
                                    <h2 class="text-center avatar-text-card card-important-info text-mint"><strong>{{ $lessons[$i]->subject }}</strong></h2>
                                </div>

                                <div class="d-flex flex-column align-content-center">
                                    <p class="card-text pl-2">{{ substr($lessons[$i]->description,0, 150)."..." }}</p>

                                    <div class="align-items-end">
                                        <ul class="list-group list-group-flush card-list pl-2">
                                            <li class="list-group-item">
                                                Vacancies:
                                                <span class="card-important-info">
                                                    @if($lessons[$i]->student_limit === -1)
                                                        unlimited
                                                    @else
                                                        {{ $lessons[$i]->student_limit }}({{ $lessons[$i]->student_limit - $lessons[$i]->enroll->count() }} left)
                                                    @endif
                                                </span>
                                            </li>
                                            <li class="list-group-item">
                                                Video time: <span class="card-important-info">{{ $lessons[$i]->length }}min</span>
                                            </li>
                                            <li class="list-group-item">
                                                Exam: <span class="card-important-info">none</span>
                                            </li>
                                            <li class="list-group-item">
                                                Price: <span class="card-important-info text-danger">{{ $lessons[$i]->price }}$</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">
                                <small class="text-muted">{{ $lessons[$i]->updated_at->diffForHumans() }}</small>
                                <a href="{{ route('lesson.get', $lessons[$i]->id) }}" class="card-btn d-block bg-mint">Check more</a>
                            </div>
                        </div>

                    @endfor
                </div>

                <nav aria-label="Page navigation ">
                    <ul class="pagination justify-content-end d-flex justify-content-center">

                        @if($pageNumber == 1)
                            <li class="page-item disabled">
                                <a class="page-link" href="{{ route('lessons_page', $pageNumber-1) }}" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="{{ route('lessons_page', $pageNumber) }}">{{ $pageNumber }}</a></li>
                            <li class="page-item"><a class="page-link" href="{{ route('lessons_page', $pageNumber+1) }}">{{ $pageNumber+1 }}</a></li>
                            <li class="page-item"><a class="page-link" href="{{ route('lessons_page', $pageNumber+2) }}">{{ $pageNumber+2 }}</a></li>
                            <li class="page-item">
                                <a class="page-link" href="{{ route('lessons_page', $pageNumber+1) }}">Next</a>
                            </li>
                        @elseif($pageNumber < $pageNumberLimit-1)
                            <li class="page-item">
                                <a class="page-link" href="{{ route('lessons_page', $pageNumber-1) }}" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="{{ route('lessons_page', $pageNumber-1) }}">{{ $pageNumber-1 }}</a></li>
                            <li class="page-item active"><a class="page-link" href="{{ route('lessons_page', $pageNumber) }}">{{ $pageNumber }}</a></li>
                            <li class="page-item "><a class="page-link" href="{{ route('lessons_page', $pageNumber+1) }}">{{ $pageNumber+1 }}</a></li>
                            <li class="page-item">
                                <a class="page-link" href="{{ route('lessons_page', $pageNumber+1) }}">Next</a>
                            </li>
                        @elseif($pageNumber == $pageNumberLimit-1)
                            <li class="page-item">
                                <a class="page-link" href="{{ route('lessons_page', $pageNumber-1) }}" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="{{ route('lessons_page', $pageNumber-1) }}">{{ $pageNumber-1 }}</a></li>
                            <li class="page-item active"><a class="page-link" href="{{ route('lessons_page', $pageNumber) }}">{{ $pageNumber }}</a></li>
                            <li class="page-item "><a class="page-link" href="{{ route('lessons_page', $pageNumber+1) }}">{{ $pageNumber+1 }}</a></li>
                            <li class="page-item">
                                <a class="page-link" href="{{ route('lessons_page', $pageNumber+1) }}">Next</a>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ route('lessons_page', $pageNumber-1) }}" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item "><a class="page-link" href="{{ route('lessons_page', $pageNumber-2) }}">{{ $pageNumber-2 }}</a></li>
                            <li class="page-item"><a class="page-link" href="{{ route('lessons_page', $pageNumber-1) }}">{{ $pageNumber-1 }}</a></li>
                            <li class="page-item active"><a class="page-link" href="{{ route('lessons_page', $pageNumber) }}">{{ $pageNumber }}</a></li>
                            <li class="page-item disabled">
                                <a class="page-link" href="{{ route('lessons_page', $pageNumber+1) }}">Next</a>
                            </li>
                        @endif

                    </ul>
                </nav>

            </section>
        </section>

    </div>








@endsection
