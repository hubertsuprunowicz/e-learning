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
                        <script>
                            window.onload = function () {
                                new CanvasJS.Chart("chartContainer", {
                                    theme: "light1",
                                    animationEnabled: false,
                                    title: {
                                        text: "Total amount user's lessons price"
                                    },
                                    data: [
                                        {
                                            type: "column",
                                            dataPoints: [
                                                {
                                                    label: "{{ str_replace('\'', ' ', $userStats[4]->user->name) }}",
                                                    y: parseInt({{ $userStats[4]->total }})
                                                },
                                                {
                                                    label: "{{ str_replace('\'', ' ', $userStats[3]->user->name) }}",
                                                    y: parseInt({{ $userStats[3]->total }})
                                                },
                                                {
                                                    label: "{{ str_replace('\'', ' ', $userStats[0]->user->name) }}",
                                                    y: parseInt({{ $userStats[0]->total }})
                                                },
                                                {
                                                    label: "{{ str_replace('\'', ' ', $userStats[1]->user->name) }}",
                                                    y: parseInt({{ $userStats[1]->total }})
                                                },
                                                {
                                                    label: "{{ str_replace('\'', ' ', $userStats[2]->user->name) }}",
                                                    y: parseInt({{ $userStats[2]->total }})
                                                }
                                            ]
                                        }
                                    ]
                                }).render();
                            };
                        </script>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card mb-4">
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
                                    <th>Total reports</th>
                                    <th>User name</th>
                                    <th>User ping</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($statistics['usersReports'] as $userReport)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $userReport->total }}</td>
                                        <td>
                                            <a href="{{ route('user.profile', $userReport->user_id) }}">{{ $userReport->user->name }}</a>
                                        </td>
                                        <td>{{ $userReport->user->ip }}</td>
                                    </tr>
                                @endforeach
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
                                    <th>Total reports</th>
                                    <th>Lesson subject</th>
                                    <th>Lesson date</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($statistics['lessonsReports'] as $lessonReport)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $lessonReport->total }}</td>
                                        <td>
                                            <a href="{{ route('lesson.get', $lessonReport->lesson_id) }}">{{ $lessonReport->lesson->subject }}</a>
                                        </td>
                                        <td>{{ $lessonReport->lesson->date }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </main>


@endsection
