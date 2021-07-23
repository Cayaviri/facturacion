<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{url('/assets/bootstrap/bootstrap.min.css')}}" rel="stylesheet">

    <title>COOPELECT</title>
</head>
<body>
@include('navbar')

@yield('content')

<!-- Popper and Bootstrap JS -->
<script src="{{url('/assets/bootstrap/popper.min.js')}}"></script>
<script src="{{url('/assets/bootstrap/bootstrap.min.js')}}"></script>
</body>
</html>
