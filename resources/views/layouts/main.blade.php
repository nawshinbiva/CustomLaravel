<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>

<body>
    <h1>@yield('title')</h1>
    <p><a href="{{ route('index') }}">Home</a></p>
    <p><a href="{{ route('about') }}">About Us</a></p>
    <p><a href="{{ route('contact') }}">Contact Us</a></p>
    <head>MODEL</head>
    <p><a href="{{ route('model-saving') }}">Saving</a></p>
    <p><a href="{{ route('model-quary') }}">Quary</a></p>


    <hr>
    @yield('content')
</body>

</html>
