@extends('master')

@section('title', 'szukaj noclegu')

@section('content')

<section class="single-whole">
    <div class="single-left">
        <h1>{{$results['nazwa_obiektu']}}</h1>
        <img src="{{ asset('img/temphotel.png') }}" id="single-hotel-img">
        <p>{{$results['adrespelny'].", ".$results['kod_pocz']." ".$results['miejscowosc']}}</p>
        <div class="single-hotel-info">
            <h2>Dane kontaktowe:</h2>
            <br>
            <p><span class="iconify" data-icon="ant-design:phone-filled" data-inline="false"></span>{{$results['telefon']}}</p>
            <p><span class="iconify" data-icon="mdi:email" data-inline="false"></span>{{$results['mail']}}</p>
            <p><span class="iconify" data-icon="mdi:web" data-inline="false"></span>{{$results['www']}}</p>
        </div>
    </div>
    <div class="single-right">
        <img src="{{ asset('img/tempmap.png') }}" id="single-map-img">
        <div class="single-distances">
            <div> 
                <span class="iconify" data-icon="fa-solid:umbrella-beach" data-inline="false"></span>
                {{ ceil(calculateDistance($results['x'], $results['y'], 54.1890882076046, 15.6084522886298)*0.014)}} minut do plazy
            </div>
            <div> 
                <span class="iconify" data-icon="cil:bike" data-inline="false"></span>
                {{ ceil(calculateDistance($results['x'], $results['y'], 54.1890882076046, 15.6084522886298)*0.014)}} minut do stacji rowerów miejskich
            </div>
            <div> 
                <span class="iconify" data-icon="map:playground" data-inline="false"></span>
                {{ ceil(calculateDistance($results['x'], $results['y'], 54.1890882076046, 15.6084522886298)*0.014)}} minut do 
            </div>
            <div> 
                <span class="iconify" data-icon="map:playground" data-inline="false"></span>
                {{ ceil(calculateDistance($results['x'], $results['y'], 54.1890882076046, 15.6084522886298)*0.014)}} minut do placu zabaw
            </div>
            <div> 
                <span class="iconify" data-icon="fluent:animal-dog-20-filled" data-inline="false"></span>
                {{ ceil(calculateDistance($results['x'], $results['y'], 54.1890882076046, 15.6084522886298)*0.014)}} minut do wybiegu dla psów
            </div>
        </div>

    </div>
</section>

@endsection