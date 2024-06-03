@extends('layouts.main')
@section('title')
    HOME PAGE
@endsection
@section('content')
    <p>Home Content</p>
    @for ($i = 0; $i < 10; $i++)
        @include('components.product-ui', [
          'id'=>$i,
        ])
    @endfor


    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores quaerat sit iste pariatur ipsam repudiandae, ex
        ratione placeat minus nihil necessitatibus ipsa ut! Tenetur placeat impedit odio asperiores facere sapiente.</p>
@endsection
