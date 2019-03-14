<!doctype html>
<html lang="eng">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Learn With Us!</title>
    <meta name="description" content="Opis naszej strony">
    <meta name="author" content="Hubert Suprunowicz">

    <!-- Latest compiled CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />


    <!-- Latest compiled JavaScript -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/ajax.js') }}"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sarala" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">

    <!-- TOKEN -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body id="bootstrap-overrides">
@include('partials.navigate')
@yield('content')

<!-- JS -->
@yield('scripts')
</body>

</html>
