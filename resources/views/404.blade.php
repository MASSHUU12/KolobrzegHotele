@extends('master') @section('title') 404 @ednsection @section('content')

<section class="single-whole">
    <div class="empty-box">
        <h1>{{ __("O nie, tylko nie to!") }}</h1>
        <img src="{{ asset('img/404.svg') }}" />
        <h1>404</h1>
        <h2>{{ __("Nie udało nam się odnaleźć strony, której szukasz.") }}</h2>
    </div>
</section>

@endsection
