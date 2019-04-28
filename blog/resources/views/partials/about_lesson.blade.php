@extends('layouts.master')

@section('content')

    <section id="content-ajax" class="w-100">


        <div class="jumbotron text-center mt-5 d-flex flex-row flex-wrap justify-content-around lesson-holder">

            <div class="author-holder w-50">

                <div class= mb-4">
                    <div class="view overlay">
                        <h3>Author</h3>
                        <img class="card-img-top" src="{{ $lesson->user->image }}" alt="{{ $lesson->user->name }} img">
                        <div class="card-body">

                            <div>

                                <h4 class="card-title">{{ $lesson->user->first_name }}</h4>
                                <h4 class="card-title">{{ $lesson->user->last_name }}</h4>
                            </div>

                            <h6 class="text-uppercase grey-text mb-3">{{ $lesson->user->occupation }}</h6>

                            <p class="card-text">{{ $lesson->user->email }}</p>

                            <hr>
                            <div class="container">
                                <div class="starrating risingstar d-flex justify-content-center flex-row-reverse">
                                    <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="5 star"></label>
                                    <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="4 star"></label>
                                    <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="3 star"></label>
                                    <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2 star"></label>
                                    <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="1 star"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route("user.profile", $lesson->user->name) }}" class="btn adv-button text-white btn-md ">Read more</a>
                    <hr>
                </div>

            </div>


            <div class="lesson-info-holder d-flex flex-column align-content-center justify-content-between w-50">
                <h2 class="card-title h2">{{ $lesson->subject }}</h2>
                <ul class="list-group list-group-flush card-list pl-2 text-lg-center">
                    <li class="list-group-item">
                        <h3><span class="card-important-info text-danger">{{ $lesson->date }}</span></h3>
                    </li>
                    <li class="list-group-item">
                        <br>
                    </li>
                    <li class="list-group-item">
                        <h3>Vacancies: <span class="card-important-info">3 of {{ $lesson->student_limit }}</span></h3>
                    </li>
                    <li class="list-group-item">
                        <h3>Video time: <span class="card-important-info">{{ $lesson->length }}min</span></h3>
                    </li>
                    <li class="list-group-item">
                        <h3>Exam: <span class="card-important-info">none</span></h3>
                    </li>
                    <li class="list-group-item">
                        <h3> Price: <span class="card-important-info">{{ $lesson->price }}$</span></h3>
                    </li>
                </ul>

                <div class="row d-flex justify-content-center">
                    <div class="col-xl-7 pl-1 pr-1">
                        <p class="card-text pl-3 pr-3">{{ $lesson->description }}</p>
                    </div>
                </div>


                <div class="pt-2 align-self-">
                    <button type="button" class="btn adv-button text-white">Join now <span class="far fa-gem ml-1"></span></button>
                    <button type="button" class="btn btn-danger">Raport</button>
                </div>
            </div>


        </div>


    </section>
@endsection