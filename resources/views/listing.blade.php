@extends('master')

@section('title', 'szukaj noclegu')

@section('content')

<section class="single-whole">
    <div class="single-left">
        <div class="single-left-top">
            <h1>{{ preg_replace('/\*{2,}/', '', $results['nazwa_obiektu']).' '.substr_count($results['nazwa_obiektu'], "*") }}</h1>
            <div class="single-map">
                <div id="my-map" x="{{$results['x']}}" y="{{$results['y']}}" style="position:relative;width:700px;height:500px;"></div>
            </div>
            <p>{{$results['adrespelny'].", ".$results['kod_pocz']." ".$results['miejscowosc']}}</p>
            <div class="single-left-distances">
                <div>
                    <span class="iconify" id="beach-icon" data-icon="fa-solid:umbrella-beach" data-inline="false"></span>
                    <p>{{ $results['from_sea'] }} min do plazy</p>
                </div>
                <hr>
                <div>
                    <span class="iconify" data-icon="cil:bike" data-inline="false"></span>
                    <p>{{ $results['from_bike'] }} min do rowerów</p>
                </div>
                <hr>
                <div>
                    <span class="iconify" data-icon="maki:park-11" data-inline="false"></span>
                    <p>{{ $results['from_bike'] }}</p>
                </div>
                <hr>
                <div>
                    <span class="iconify" data-icon="map:playground" data-inline="false"></span>
                    <p>{{ $results['from_bike'] }}</p>
                </div>
                <hr>
                <div>
                    <span class="iconify" data-icon="fluent:animal-dog-20-filled" data-inline="false"></span>
                    <p>{{ $results['from_bike'] }}</p>
                </div>
            </div>
        </div>
        <div class="single-left-bottom">
            <h1>Zabytki warte zobaczenia</h1>
            @for ($i = 0; $i < 3; $i++)
                <div class="single-left-bottom-element">
                    <div>
                        <h2>{{ $landmarks[$i]['nazwa'] }}</h2>
                        <p>{{ $landmarks[$i]['nazwa_alternatywna'] }}</p>
                    </div>
                    <p>tylko 10 minut od tego noclegu</p>
                    <a href="" class="btn btn-bottom-element">
                        <div class="div-1">pokaz</div>
                        <div class="div-2">na mapie</div>
                    </a> 
                </div>
                <hr>
            @endfor
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
            <a target="_blank" rel="noopener noreferrer" href="{{ 'http://'.$results['www'] }}" class="btn">
                <div class="div-1">strona</div>
                <div class="div-2">strona</div>
            </a> 
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