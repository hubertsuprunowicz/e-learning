@extends('layouts.master')

@section('content')

<header class="user-header">

    <section class="profile-holder container-fluid">
        <div class="card card-personal">
            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(29).jpg" alt="Card image cap">
            <div class="card-body">

                <div class="personal-details">
                    <h4 class="card-title title-one">Hubert</h4>
                    <h4 class="card-title title-one">Suprunowicz</h4>
                </div>

                <h6 class="text-uppercase grey-text mb-3">front-end developer</h6>
                <p class="card-meta">Joined in 2019</p>

                <p class="card-text">Clara is an photographer living in Madrid.</p>

                <hr>
                <div class="container">
                    <div class="starrating risingstar d-flex justify-content-center flex-row-reverse">
                        <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="5 star"></label>
                        <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="4 star"></label>
                        <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="3 star"></label>
                        <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2 star"></label>
                        <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="1 star"></label>
                    </div>
                    <div class="opinion-holder"><a href="#opinions" class="">Opinions<span class="badge badge-success ml-2">5</span></a></div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div>description</div>
            <div></div>
        </div>

    </section>





    <section id="opinions" class="container-fluid">

            <div class="card-columns">

                <div class="card testimonial-card mt-2 mb-3">

                    <div class="card-body">
                        <!-- Name -->
                        <h4 class="card-title font-weight-bold">John Snow</h4>
                        <span>2018-07-22</span>
                        <hr>
                        <!-- Quotation -->
                        <blockquote><i class="fas fa-quote-left"></i> Lorem ipsum dolorLorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum ipsum non nulla pretium molestie. Quisque vulputate risus ac leo dictum tempor. Ut et elit eget ipsum fringilla imperdiet id eget mauris. Nulla placerat volutpat lectus eu venenatis. Nam scelerisque efficitur dictum. Curabitur mi neque, bibendum nec congue venenatis, convallis a diam. Nulla at lacus ac dui efficitur bibendum at sit amet purus.sicing elit. Eos,
                            adipisci</blockquote>
                    </div>

                </div>

                <div class="card testimonial-card mt-2 mb-3">

                    <div class="card-body">

                        <h4 class="card-title font-weight-bold">John Snow</h4>
                        <hr>
                        <!-- Quotation -->
                        <blockquote><i class="fas fa-quote-left"></i> LLorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum ipsum non nulla pretium molestie. Quisque vulputate risus ac leo dictum tempor. Ut et elit eget ipsum fringilla imperdiet id eget mauris. Nuficitur dictum. Curabitur mi neque, bibendum nec congue venenatis, convallis a diam. Nulla at lacus ac dui efficitur bibendum at sit amet purus.</blockquote>
                    </div>

                </div>
                <!--Card-->

                <!--Card-->
                <div class="card testimonial-card mt-2 mb-3">

                    <!-- Background color -->
                    <div class="card-up aqua-gradient"></div>


                    <!-- Content -->
                    <div class="card-body">
                        <!-- Name -->
                        <h4 class="card-title font-weight-bold">John Snow</h4>
                        <hr>
                        <!-- Quotation -->
                        <blockquote><i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos,
                            adipisci</blockquote>
                    </div>

                </div>
                <!--Card-->


                <!--Card-->
                <div class="card testimonial-card mt-2 mb-3">

                    <!-- Background color -->
                    <div class="card-up aqua-gradient"></div>



                    <!-- Content -->
                    <div class="card-body">
                        <!-- Name -->
                        <h4 class="card-title font-weight-bold">John Snow</h4>
                        <hr>
                        <!-- Quotation -->
                        <blockquote><i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos,
                            adipisci</blockquote>
                    </div>

                </div>
                <!--Card-->

                <!--Card-->
                <div class="card testimonial-card mt-2 mb-3">

                    <!-- Background color -->
                    <div class="card-up aqua-gradient"></div>

                    <!-- Content -->
                    <div class="card-body">
                        <!-- Name -->
                        <h4 class="card-title font-weight-bold">John Snow</h4>
                        <hr>
                        <!-- Quotation -->
                        <blockquote><i class="fas fa-quote-left"></i>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dictum ipsum non nulla pretium molestie. Quisque vulputate risus ac leo dictum tempor. Ut et elit eget ipsum fringilla imperdiet id eget mauris. Nulla placerat volutpat lectus eu venenatis. Nam scelerisque efficitur dictum. Curabitur mi neque, bibendum nec congue venenatis, convallis a diam. Nulla at lacus ac dui efficitur bibendum at sit amet purus.
                        </blockquote>
                    </div>

                </div>
                <!--Card-->


            </div>
            <!-- Card package -->








    </section>



</header>


@endsection