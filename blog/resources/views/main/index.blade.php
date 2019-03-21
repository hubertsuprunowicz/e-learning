@extends('layouts.master')


@section('content')

    <header class="no-repeat-img-header ">


        <div class="bg-container">
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
            <section class="join-us-header">
                <a href="#" class="join-us-holder">
                    JOIN US
                </a>
            </section>

            <span class="vertical-line-header"></span>

        </div>
    </header>


    <article class="">
        <div class="jumbotron">
            <h1 class="display-4">Hello, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>
    </article>


@endsection
