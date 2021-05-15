@extends('master')

@section('title', 'Coś o nas')

@section('content')

<section class="info-page">
    <div class="info-page-inner">
        <div class="info-title-about">
            <div>
                <h1>Coś o nas.</h1>
            </div>
        </div>
        <div class="info-top-about">
            <div>
                <h2>Jesteśmy turystami.</h2>
                <p>Wierzymy, że wyszukiwanie wymarzonego noclegu może być szybkie i przyjemne. Dlatego zdecydowaliśmy, że stworzymy własną platformę, która to ułatwi i zapewni wszystko to co najważniejsze w jak najprostszy sposób.</p>
            </div>
        </div>
        <div class="info-about">
            <div class="info-main-image">
                <img src="{{ asset('img/img-maciej.png') }}" alt="">
            </div>
            <div>
                <h2>Maciej</h2>
                <p>Ogarnia wszystko po trochu.</p>
            </div>
        </div>
        <div class="info-about">
            <div>
                <h2>Jakub</h2>
                <p>Ekspert od back-endu i styli.</p>
            </div>
            <div class="info-main-image">
                <img src="{{ asset('img/img-jakub.png') }}" alt="">
            </div>
        </div>
    </div>
</section>

@endsection