@extends('master')

@section('title', 'Homepage')

@section('content')

<section class="home-search">
    <div class="search-container-image">
        <img src="{{ asset('img/port-low-res.png') }}" data-src="{{ asset('img/port.png') }}" id="main-image">
    </div>
    <h1 class="main-text">Twój wypoczynek <br> w Kołobrzegu</h1>
    <div class="search-container">
        <p>Zaznacz co jest dla ciebie najważniejsze, a my znajdziemy twój idealny nocleg.</p>
        @include('searchbar')
    </div>
</section>
<div class="features-container">
    <div class="feature-both">
        <div class="feature-image">
            <img class="feature-img" src="{{ asset('img/ico_main1.png') }}" />
        </div>
        <div class="feature-text">
            <h1>Wyszukiwarka od <br> turystów dla turystów</h1>
            <p>Wyszukiwanie dogodnego miejsca nigdy nie było tak proste! Nowoczesny, prosty i elegancki design sprawia, że znalezienie
                idealnej oferty to kwestia kilku minut.</p>
        </div>
    </div>
    <div class="feature-both feature-right">
        <div class="feature-image">
            <img class="feature-img" src="{{ asset('img/ico_main2.png') }}" />
        </div>
        <div class="feature-text">
            <h1>Znajdź swoje <br> wymarzone miejsce</h1>
            <p>Wybierz to, co dla ciebie jest najważniejsze, a my dopasujemy najlepsze miejsca do twoich preferencji, abyś mógł spędzić czas tak jak to zaplanowałeś.</p>
        </div>
    </div>
    <div class="feature-both">
        <div class="feature-image">
            <img class="feature-img" src="{{ asset('img/ico_main3.png') }}" />
        </div>
        <div class="feature-text">
            <h1>Jak to działa?</h1>
            <p>Nasz innowacyjny system wyszukiwania ofert sam dopasuje najlepszy nocleg do twoich preferencji. Wszystko co musisz zrobić, to wybrać jak ważne są dla ciebie podane kategorie.</p>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js" integrity="sha512-cdV6j5t5o24hkSciVrb8Ki6FveC2SgwGfLE31+ZQRHAeSRxYhAQskLkq3dLm8ZcWe1N3vBOEYmmbhzf7NTtFFQ==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js"></script>	

<script src="{{ asset('js/searchbarDropdown.js') }}"></script>
<script src="{{ asset('js/homeLoading.js') }}"></script>

@endsection