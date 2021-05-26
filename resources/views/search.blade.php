@extends('master')

@section('title', 'Szukaj noclegu')

@section('content')

<div class="search-page-whole">
    <section class="home-search search-page-search">
        <div class="search-container-image transition-main-image-search">
            <img src="{{ asset('img/port-low-res.png') }}" data-src="{{ asset('img/port.png') }}" id="main-image">
        </div>
        <div class="search-container">
            @include('searchbar')
        </div>
    </section>

    <section class="search-results-container">
        <div class="search-results-container-inner">
            @foreach ($results as $item)
            @php
                $name = substr($item['nazwa_obiektu'], 0, 30);
            @endphp
                <div class="search-single-listing">
                    <div class="search-single-listing-inner">
                        <div class="listing-image">
                            <img src="{{"https://dev.virtualearth.net/REST/V1/Imagery/Map/Road/".$item['x']."%2C".$item['y']."/15?mapSize=400,300&format=png&key=ArnGjMKK1i1pqfVUfvKGlq33gKNMEgcV5wFmJ3L2QLm65AgaekhL44ZlGvAktUQ_"}}" alt="Bing Map" class="search-img" >
                            <span class="iconify map-pin" data-icon="eva:pin-fill" data-inline="false"></span>
                        </div>
                        <div class="listing-right">
                            <div class="listing-name">
                                <div>
                                    @for ($i = 0; $i < $item['stars']; $i++)
                                        <span class="iconify" data-icon="ant-design:star-filled" data-inline="false"></span>
                                    @endfor
                                    @if ($i == 0)
                                        <p class="listing-type">{{ __($item['rodzaj']) }}</p>
                                    @endif
                                </div>
                                <a href="{{ '/search/'.$item['_id'] }}">
                                <h3>{{$name}}</h3>
                                </a>
                            </div>
                            <div class="listing-features">
                                @if ( array_key_exists('features', $item))
                                    @if ( array_key_exists('high_standard', $item['features']))
                                        <div class="listing-feature feature-standard"><p>wysoki standard</p></div>
                                    @endif
                                    @if ( array_key_exists('train', $item['features']))
                                        <div class="listing-feature feature-train"><p>{{__('dworzec w pobliżu')}}</p></div>
                                    @endif
                                    @if ( array_key_exists('city_center', $item['features']))
                                        <div class="listing-feature feature-center"><p>blisko centrum</p></div>
                                    @endif
                                    @if ( array_key_exists('greenery', $item['features']))
                                        <div class="listing-feature feature-greenery"><p>blisko zieleni</p></div>
                                    @endif
                                @endif
                            </div>
                            <div class="listing-bottom">
                                <div class="listing-bottom-icons">
                                    <div>
                                        <span class="iconify" data-icon="fa-solid:umbrella-beach" data-inline="false" id="beach-icon"></span>
                                        <p>{{ $item['from_sea'] }} min {{__('do plaży')}}</p>
                                    </div>
                                    <div>
                                        <span class="iconify" data-icon="cil:bike" data-inline="false"></span>
                                        <p>{{ $item['from_bike'] }} min {{__('do rowerów')}}</p>
                                    </div>
                                    <div class="listing-bottom-icons-dropdown">
                                        <div>
                                            <span class="iconify" data-icon="fa-solid:umbrella-beach" data-inline="false" id="beach-icon"></span>
                                            <p>{{ $item['from_park'] }} min do parku</p>
                                        </div>
                                        <div>
                                            <span class="iconify" data-icon="fa-solid:umbrella-beach" data-inline="false" id="beach-icon"></span>
                                            <p>{{ $item['from_playground'] }} min do placu zabaw</p>
                                        </div>
                                        <div>
                                            <span class="iconify" data-icon="fa-solid:umbrella-beach" data-inline="false" id="beach-icon"></span>
                                            <p>{{ $item['from_dogpark'] }} min do wybiegu dla psów</p>
                                        </div>
                                    </div>
                                </div>
                                <button class="button-secondary">{{__('więcej')}}</button>
                            </div>
                        </div>
                        <div class="listing-active-bottom">
                            <p>{{$item['adrespelny'].", ".$item['kod_pocz']." ".$item['miejscowosc']}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="button-secondary">Pokaż mniej trafne rezultaty</button>
    </section>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js" integrity="sha512-cdV6j5t5o24hkSciVrb8Ki6FveC2SgwGfLE31+ZQRHAeSRxYhAQskLkq3dLm8ZcWe1N3vBOEYmmbhzf7NTtFFQ==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>

@endsection