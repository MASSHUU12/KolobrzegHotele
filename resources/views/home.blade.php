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
        <form action="/search" method="get">
            <div class="searchbar">
                <div class="searchbar-filter">
                    <input type="hidden" name="distance-from-sea" class="search-input">
                    <div class="filter-icon"><span class="iconify" data-icon="fa-solid:umbrella-beach" data-inline="false" id="beach-icon"></span></div>
                    <div class="filter-text">
                        <p class="filter-label">Plaża</p>
                        <p class="filter-value filter-end-value">Bez znaczenia</p>
                    </div>
                    <div class="filter-dropdown">
                        <div class="filter-dropdown-element">
                            <p class="filter-value">Bez znaczenia</p>
                        </div>
                        <div class="filter-dropdown-element">
                            <p class="filter-value">Ważne</p>
                        </div>
                        <div class="filter-dropdown-element">
                            <p class="filter-value">Bardzo ważne</p>
                        </div>
                    </div>
                </div>
                <div class="searchbar-filter">
                    <input type="hidden" name="distance-from-bicycle" class="search-input">
                    <div class="filter-icon"><span class="iconify" data-icon="cil:bike" data-inline="false"></span></i></div>
                    <div class="filter-text">
                        <p class="filter-label">Rowery Miejskie</p>
                        <p class="filter-value filter-end-value">Bez znaczenia</p>
                    </div>
                    <div class="filter-dropdown">
                        <div class="filter-dropdown-element">
                            <p class="filter-value">Bez znaczenia</p>
                        </div>
                        <div class="filter-dropdown-element">
                            <p class="filter-value">Ważne</p>
                        </div>
                        <div class="filter-dropdown-element">
                            <p class="filter-value">Bardzo ważne</p>
                        </div>
                    </div>
                </div>
                <div class="searchbar-filter">
                    <input type="hidden" name="distance-from-parking" class="search-input">
                    <div class="filter-icon"><span class="iconify" data-icon="fluent:vehicle-car-16-filled" data-inline="false"></span></div>
                    <div class="filter-text">
                        <p class="filter-label">Parkingi</p>
                        <p class="filter-value filter-end-value">Bez znaczenia</p>
                    </div>
                    <div class="filter-dropdown">
                        <div class="filter-dropdown-element">
                            <p class="filter-value">Bez znaczenia</p>
                        </div>
                        <div class="filter-dropdown-element">
                            <p class="filter-value">Ważne</p>
                        </div>
                        <div class="filter-dropdown-element">
                            <p class="filter-value">Bardzo ważne</p>
                        </div>
                    </div>
                </div>
                <div class="searchbar-filter">
                    <input type="hidden" name="distance-from-playground" class="search-input">
                    <div class="filter-icon"><span class="iconify" data-icon="map:playground" data-inline="false"></span></div>
                    <div class="filter-text">
                        <p class="filter-label">Place zabaw</p>
                        <p class="filter-value filter-end-value">Bez znaczenia</p>
                    </div>
                    <div class="filter-dropdown">
                        <div class="filter-dropdown-element">
                            <p class="filter-value">Bez znaczenia</p>
                        </div>
                        <div class="filter-dropdown-element">
                            <p class="filter-value">Ważne</p>
                        </div>
                        <div class="filter-dropdown-element">
                            <p class="filter-value">Bardzo ważne</p>
                        </div>
                    </div>
                </div>
                <div class="searchbar-filter">
                    <input type="hidden" name="distance-from-dog" class="search-input">
                    <div class="filter-icon"><span class="iconify" data-icon="fluent:animal-dog-20-filled" data-inline="false"></span></div>
                    <div class="filter-text">
                        <p class="filter-label">Wybiegi dla psów</p>
                        <p class="filter-value filter-end-value">Bez znaczenia</p>
                    </div>
                    <div class="filter-dropdown">
                        <div class="filter-dropdown-element">
                            <p class="filter-value">Bez znaczenia</p>
                        </div>
                        <div class="filter-dropdown-element">
                            <p class="filter-value">Ważne</p>
                        </div>
                        <div class="filter-dropdown-element">
                            <p class="filter-value">Bardzo ważne</p>
                        </div>
                    </div>
                </div>
                <div class="searchbar-filter searchbar-standard">
                    <div class="filter-icon"><span class="iconify" data-icon="clarity:star-solid" data-inline="false"></span></div>
                    <div class="filter-text">
                        <p class="filter-label">Standard</p>
                        <p class="filter-value">dowolny</p>
                    </div>
                </div>
                <button class="searchbar-button"><span class="iconify" data-icon="ant-design:search-outlined" data-inline="false" id="search-iconify"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; szukaj</button>
            </div>
        </form>
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
<script src="{{ asset('js/searchbarDropdown.js') }}"></script>
<script src="{{ asset('js/homeLoading.js') }}"></script>

@endsection