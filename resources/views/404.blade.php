@extends('master')

@section('title', '404')

@section('content')

<section class="single-whole">
    <div class="empty-box">
        <h1>O nie, tylko nie to!</h1>
        <img src="{{ asset('img/404.svg') }}">
        <h1>404</h1>
        <h2>Nie udało nam sie odnaleźć strony której szukasz.</h2>
    </div>
</section>

@endsection