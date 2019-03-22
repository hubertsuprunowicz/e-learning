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

        <section class="stat-info">
            <div class="card-group" id="counter">
                <div class="card">
                    <div class="counter"><span class="counter-value" data-count="14">0</span></div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="counter"><span class="counter-value" data-count="254">0</span></div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="counter"><span class="counter-value" data-count="1523">0</span></div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                </div>
            </div>
        </section>


        <section>
            <h1>Actual offers</h1>

            <div class="card-deck">
                <div class="card">
                    <img src="https://facefacts.scot/images/science/Q2_high_health_f.jpg" class="card-img-top w-25" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card">
                    <img src="https://facefacts.scot/images/science/Q2_high_health_f.jpg" class="card-img-top w-25" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card">
                    <img src="https://facefacts.scot/images/science/Q2_high_health_f.jpg" class="card-img-top w-25" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>

        </section>


    </article>


@endsection
