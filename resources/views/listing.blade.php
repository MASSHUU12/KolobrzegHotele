@extends('master')

@section('title', 'szukaj noclegu')

@section('content')

<section class="single-whole">
    <div class="single-left">
        <div class="single-left-top">
            <h1>{{$results['nazwa_obiektu']}}</h1>
            <div class="single-map">
                <div id="my-map" x="{{$results['x']}}" y="{{$results['y']}}" style="position:relative;width:700px;height:500px;"></div>
            </div>
            <p>{{$results['adrespelny'].", ".$results['kod_pocz']." ".$results['miejscowosc']}}</p>
            <div class="single-left-distances">
                <div>
                    <span class="iconify" data-icon="fa-solid:umbrella-beach" data-inline="false"></span>
                    <p>{{ $results['from_sea'] }} min do plazy</p>
                </div>
                <div>
                    <span class="iconify" data-icon="cil:bike" data-inline="false"></span>
                    <p>{{ $results['from_bike'] }} min do rowerów</p>
                </div>
                <div>
                    <span class="iconify" data-icon="maki:park-11" data-inline="false"></span>
                    <p>{{ $results['from_bike'] }}</p>
                </div>
                <div>
                    <span class="iconify" data-icon="map:playground" data-inline="false"></span>
                    <p>{{ $results['from_bike'] }}</p>
                </div>
                <div>
                    <span class="iconify" data-icon="fluent:animal-dog-20-filled" data-inline="false"></span>
                    <p>{{ $results['from_bike'] }}</p>
                </div>
            </div>
        </div>
        <div class="single-left-bottom">
            <h1>Zabytki warte zobaczenia</h1>
            <div class="single-left-bottom-element">
                <div>
                    <h2>zabytek</h2>
                    <p>aka zabytek</p>
                </div>
                <p>tylko 10 minut od tego noclegu</p>
                <button class="button-primary">123</button>
            </div>
            <hr>
            <div class="single-left-bottom-element">
                <div>
                    <h2>zabytek</h2>
                    <p>aka zabytek</p>
                </div>
                <p>tylko 10 minut od tego noclegu</p>
                <button class="button-primary">123</button>
            </div>
            <hr>
            <div class="single-left-bottom-element">
                <div>
                    <h2>zabytek</h2>
                    <p>aka zabytek</p>
                </div>
                <p>tylko 10 minut od tego noclegu</p>
                <button class="button-primary">123</button>
            </div>
        </div>
    </div>
    <div class="single-right">
        <div class="single-contact">
            <h1>Dane kontaktowe</h1>
            @if ($results['telefon'] !== "")
            <div>
                <span class="iconify" data-icon="ant-design:phone-filled" data-inline="false"></span>
                <p>{{ $results['telefon'] }}</p>
            </div>
            @endif
            @if ($results['mail'] !== "")
            <div>
                <span class="iconify" data-icon="entypo:mail" data-inline="false"></span>
                <p>{{ $results['mail'] }}</p>
            </div>
            @endif
            @if ($results['www'] !== "")
            <span class="iconify" data-icon="mdi:web" data-inline="false"></span><button class="button-primary">strona</button>
            @endif
        </div>
        <div class="single-nearby-container">
            <h1>Inne noclegi w pobliżu</h1>
            <div class="single-nearby">
                <h2>nearby</h2>
                <p>10 min od tego noclegu</p>
            </div>
            <hr>
            <div class="single-nearby">
                <h2>nearby</h2>
                <p>10 min od tego noclegu</p>
            </div>
            <hr>
            <div class="single-nearby">
                <h2>nearby</h2>
                <p>10 min od tego noclegu</p>
            </div>
        </div>
    </div>
</section>

<script type='text/javascript' src='http://www.bing.com/api/maps/mapcontrol?callback=GetMap&setLang=pl&setMkt=pl-PL&key=ArnGjMKK1i1pqfVUfvKGlq33gKNMEgcV5wFmJ3L2QLm65AgaekhL44ZlGvAktUQ_' async defer></script>
<script type="text/javascript" src="{{ asset('js/singleMap.js') }}"></script>

@endsection