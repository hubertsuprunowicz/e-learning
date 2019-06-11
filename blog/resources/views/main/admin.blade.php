@extends('layouts.master')

@section('content')

    <!--Main layout-->
    <main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">
            <!--Grid row-->
            <div class="row wow fadeIn">
                <div class="col-md-9 mb-4">
                    <div class="card">

                        <div class="card-body">
                            <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                        </div>

                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card mb-4">
                        @if(isset($test)) {{ $test }} @endif
                        <div class="card-body">

                            <div class="list-group list-group-flush">
                                <a class="list-group-item list-group-item-action waves-effect">Sales
                                    <span class="badge badge-success badge-pill pull-right">22%
                    <i class="fas fa-arrow-up ml-1"></i>
                  </span>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">Traffic
                                    <span class="badge badge-danger badge-pill pull-right">5%
                    <i class="fas fa-arrow-down ml-1"></i>
                  </span>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">Lessons
                                    <span class="badge badge-primary badge-pill pull-right">{{  $statistics['totalLessons'] }}</span>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">Users
                                    <span class="badge badge-primary badge-pill pull-right">{{  $statistics['totalUsers'] }}</span>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">Messages
                                    <span class="badge badge-primary badge-pill pull-right">{{  $statistics['totalMessages'] }}</span>
                                </a>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="row wow fadeIn">

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <!--Card-->
                    <div class="card">

                        <!--Card content-->
                        <div class="card-body">

                            <!-- Table  -->
                            <table class="table table-hover">
                                <!-- Table head -->
                                <thead class="blue-grey lighten-4">
                                    <tr>
                                        <th>#</th>
                                        <th>User</th>
                                        <th>Total lessons created</th>
                                        <th>Total price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>{{ $topUserLesson[0]['user']['name'] }}</td>
                                        <td>{{ $topUserLesson[0]['total'] }}</td>
                                        <td>{{ $topUserLesson[0]['price'] }}</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>{{ $topUserLesson[1]['user']['name'] }}</td>
                                        <td>{{ $topUserLesson[1]['total'] }}</td>
                                        <td>{{ $topUserLesson[1]['price'] }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>{{ $topUserLesson[2]['user']['name'] }}</td>
                                        <td>{{ $topUserLesson[2]['total'] }}</td>
                                        <td>{{ $topUserLesson[2]['price'] }}</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>
                    <!--/.Card-->

                </div>

                <div class="col-md-6 mb-4">

                    <div class="card">

                        <div class="card-body">

                            <table class="table table-hover">
                                <thead class="blue lighten-4">
                                <tr>
                                    <th>#</th>
                                    <th>Lorem</th>
                                    <th>Ipsum</th>
                                    <th>Dolor</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Cell 1</td>
                                    <td>Cell 2</td>
                                    <td>Cell 3</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Cell 4</td>
                                    <td>Cell 5</td>
                                    <td>Cell 6</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Cell 7</td>
                                    <td>Cell 8</td>
                                    <td>Cell 9</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

            </div>

        </div>
    </main>


@endsection