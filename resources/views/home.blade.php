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
            <form action="" method="get">
                <div class="searchbar">
                    <div class="searchbar-filter">
                        <input type="hidden" name="distance-from-sea" class="search-input">
                        <div class="filter-icon">P</div>
                        <div class="filter-text">
                            <p class="filter-label">odległość od morza</p>
                            <p class="filter-value filter-end-value">niewazne</p>
                        </div>
                        <div class="filter-dropdown">
                            <div class="filter-dropdown-element">
                                <p class="filter-value">niewazne</p>
                            </div>
                            <div class="filter-dropdown-element">
                                <p class="filter-value">100m</p>
                            </div>
                            <div class="filter-dropdown-element">
                                <p class="filter-value">niewazne</p>
                            </div>
                        </div>
                    </div>
                    <div class="searchbar-filter">
                        <div class="filter-icon">P</div>
                        <div class="filter-text">
                            <p class="filter-label">odległość od morza</p>
                            <p class="filter-value">niewazne</p>
                        </div>
                        <div class="filter-dropdown">
                            <div class="filter-dropdown-element">
                                <p class="filter-value">niewazne</p>
                            </div>
                            <div class="filter-dropdown-element">
                                <p class="filter-value">niewazne</p>
                            </div>
                            <div class="filter-dropdown-element">
                                <p class="filter-value">niewazne</p>
                            </div>
                        </div>
                    </div>
                    <div class="searchbar-filter">
                        <div class="filter-icon">P</div>
                        <div class="filter-text">
                            <p class="filter-label">odległość od morza</p>
                            <p class="filter-value">niewazne</p>
                        </div>
                        <div class="filter-dropdown">
                            <div class="filter-dropdown-element">
                                <p class="filter-value">niewazne</p>
                            </div>
                            <div class="filter-dropdown-element">
                                <p class="filter-value">niewazne</p>
                            </div>
                            <div class="filter-dropdown-element">
                                <p class="filter-value">niewazne</p>
                            </div>
                        </div>
                    </div>
                    <div class="searchbar-filter">
                        <div class="filter-icon">P</div>
                        <div class="filter-text">
                            <p class="filter-label">odległość od morza</p>
                            <p class="filter-value">niewazne</p>
                        </div>
                        <div class="filter-dropdown">
                            <div class="filter-dropdown-element">
                                <p class="filter-value">niewazne</p>
                            </div>
                            <div class="filter-dropdown-element">
                                <p class="filter-value">niewazne</p>
                            </div>
                            <div class="filter-dropdown-element">
                                <p class="filter-value">niewazne</p>
                            </div>
                        </div>
                    </div>
                    <div class="searchbar-filter">
                        <div class="filter-icon">P</div>
                        <div class="filter-text">
                            <p class="filter-label">odległość od morza</p>
                            <p class="filter-value">niewazne</p>
                        </div>
                        <div class="filter-dropdown">
                            <div class="filter-dropdown-element">
                                <p class="filter-value">niewazne</p>
                            </div>
                            <div class="filter-dropdown-element">
                                <p class="filter-value">niewazne</p>
                            </div>
                            <div class="filter-dropdown-element">
                                <p class="filter-value">niewazne</p>
                            </div>
                        </div>
                    </div>
                    <div class="searchbar-filter searchbar-standard">
                        <div class="filter-icon">P</div>
                        <div class="filter-text">
                            <p class="filter-label">standard</p>
                            <p class="filter-value">dowolny</p>
                        </div>
                    </div>
                    <button class="searchbar-button">P &nbsp&nbsp szukaj</button>
                </div>
            </form>
        </div>
    </section>
    <div class="features-container">
        <div class="feature-both">
            <div class="feature-image">
                <img class="feature-img" src="{{ asset('img/port.png') }}" />
            </div>
            <div class="feature-text">
                <h1>Wyszukiwarka od <br> turystów dla turystów</h1>
                <p>Wyszukiwanie dogodnego miejsca nigdy nie było tak proste! Nowoczesny, prosty i elegancki design sprawia, że znalezienie
                idealnej oferty to kwestia kilku minut.</p>
            </div>
        </div>
        <div class="feature-both feature-right">
            <div class="feature-image">
                <img class="feature-img" src="{{ asset('img/port.png') }}" />
            </div>
            <div class="feature-text">
                <h1>Wyszukiwarka od <br> turystów dla turystów</h1>
                <p>Wyszukiwanie dogodnego miejsca nigdy nie było tak proste! Nowoczesny, prosty i elegancki design sprawia, że znalezienie
                idealnej oferty to kwestia kilku minut.</p>
            </div>
        </div>
        <div class="feature-both">
            <div class="feature-image">
                <img class="feature-img" src="{{ asset('img/port.png') }}" />
            </div>
            <div class="feature-text">
                <h1>Wyszukiwarka od <br> turystów dla turystów</h1>
                <p>Wyszukiwanie dogodnego miejsca nigdy nie było tak proste! Nowoczesny, prosty i elegancki design sprawia, że znalezienie
                idealnej oferty to kwestia kilku minut.</p>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js" integrity="sha512-cdV6j5t5o24hkSciVrb8Ki6FveC2SgwGfLE31+ZQRHAeSRxYhAQskLkq3dLm8ZcWe1N3vBOEYmmbhzf7NTtFFQ==" crossorigin="anonymous"></script>
    <script src="{{ asset('js/searchbarDropdown.js') }}"></script>
    <script src="{{ asset('js/homeLoading.js') }}"></script>

@endsection