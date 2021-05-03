@extends('master')

@section('title', 'szukaj noclegu')

@section('content')

<section class="home-search search-page-search">
    <div class="search-container-image">
        <img src="{{ asset('img/port-low-res.png') }}" data-src="{{ asset('img/port.png') }}" id="main-image">
    </div>
    <div class="search-container">
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
                        <p class="filter-label">standard</p>
                        <p class="filter-value">dowolny</p>
                    </div>
                </div>
                <button class="searchbar-button"><span class="iconify" data-icon="ant-design:search-outlined" data-inline="false" id="search-iconify"></span>&nbsp&nbsp&nbsp&nbsp&nbsp szukaj</button>
            </div>
        </form>
    </div>
</section>

<section class="search-results-container">
    <div class="search-results-container-inner">
        asdf
        <table border="1">
            <th>
                <td>ulica</td>
                <td>1</td>
                <td>1</td>
            </th>
            @foreach ($results as $item)
                <tr>
                    <td>{{$item['nazwa_obiektu']}}</td>
                    <td>{{$item['ulica']}}</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
            @endforeach
        </table>
    </div>
</section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js" integrity="sha512-cdV6j5t5o24hkSciVrb8Ki6FveC2SgwGfLE31+ZQRHAeSRxYhAQskLkq3dLm8ZcWe1N3vBOEYmmbhzf7NTtFFQ==" crossorigin="anonymous"></script>
<script src="{{ asset('js/searchbarDropdown.js') }}"></script>
<script src="{{ asset('js/homeLoading.js') }}"></script>

@endsection