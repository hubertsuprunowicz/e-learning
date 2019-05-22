@extends('layouts.master')

@section('content')

<header class="user-header">
    <br>
    <br>

    <section class="profile-holder container-fluid">
        <div class="card card-profile">
            <img class="card-img-top" src="{{ $user->image }}" alt="{{ $user->name }} img">
            <div class="card-body">

                <div class="personal-details">
                    <h4 class="card-title title-one">{{ $user->first_name }}</h4>
                    <h4 class="card-title title-one">{{ $user->last_name }}</h4>
                </div>

                <h6 class="text-uppercase grey-text mb-3">{{ $user->occupation }}</h6>
                <p class="card-meta">Joined in {{ $user->created_at->diffForHumans() }}</p>


                <p class="card-text">Lorem ipsum madre padre este meste heszke w keszke.</p>

                <hr>
                <div class="container">
                    <div class="starrating risingstar d-flex justify-content-center flex-row-reverse">
                        <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="5 star"></label>
                        <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="4 star"></label>
                        <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="3 star"></label>
                        <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2 star"></label>
                        <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="1 star"></label>
                    </div>
                    <div class="opinion-holder"><a href="#opinions" class="text-mint">Opinions<span class="badge badge-success ml-2">5</span></a></div>
                </div>
            </div>
        </div>

        <div class="card-profile">
            <div class="card-body">

                <form>
                    <p class="h4 text-center py-4">Text me!</p>

                    <label for="defaultFormCardNameEx" class="grey-text font-weight-light">Title</label>
                    <input type="text" id="defaultFormCardNameEx" class="form-control" required>

                    <br>


                    <label for="defaultFormCardEmailEx" class="grey-text font-weight-light">Your message</label>
                    <textarea id="defaultFormCardEmailEx" class="form-control" rows="14" minlength="" required></textarea>

                    <div class="text-center py-4 mt-3">
                        <button class="btn btn-sm adv-button" type="submit">Send</button>
                    </div>
                </form>

            </div>
        </div>
    </section>

</header>

<article class="mt-5">

    <section class="container-fluid">

        <div class=" text-center p-4 d-flex flex-wrap-reverse">

            <div class="row">

                <div class="col-md-4 offset-md-1 mx-3 my-3" >

                    <div class="view overlay pt-3">
                        <p class="font-weight-normal">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque, totam
                            rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                            dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur.
                        </p>
                    </div>

                </div>

                <div class="col-md-7 text-md-left ml-3 mt-3" >
                    <a href="#!" class="green-text ">
                        <h4 class="h4 pb-1 mt-2"><i class="fas fa-user pr-1"></i> About Me</h4>
                    </a>
                    <p class="font-weight-normal">{{ $user->about }}</p>

                </div>
            </div>

        </div>
    </section>
</article>

<aside class="mt-5 mb-5">
    <section id="opinions" class="container-fluid">
            <div class="card-columns">

                @foreach($user->opinions as $opinion)
                <div class="card testimonial-card mt-2 mb-3">
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


@endsection