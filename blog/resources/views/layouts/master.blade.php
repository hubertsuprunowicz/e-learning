<!doctype html>
<html lang="eng">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Learn With Us!</title>
    <meta name="description" content="Opis naszej strony">
    <meta name="author" content="Hubert Suprunowicz">

    <!-- Latest compiled CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Latest compiled JavaScript -->


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sarala" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Paytone+One" rel="stylesheet">


    <!-- TOKEN -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body>
@include('partials.navigate')
@yield('content')



<!-- JS -->
@include('partials.scripts')
</body>

</html>
