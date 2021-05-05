@extends('master')

@section('title', 'szukaj noclegu')

@section('content')

<section class="single-whole">
    <div class="single-left">
        <h1>{{$results['nazwa_obiektu']}}</h1>
        <img src="{{ asset('img/temphotel.png') }}" id="single-hotel-img">
        <div class="single-hotel-info">
            <p>{{$results['telefon']}}</p>
            <p>{{$results['www']}}</p>
        </div>
    </div>
    <div class="single-right">
        <img src="{{ asset('img/tempmap.png') }}" id="single-map-img" >
        <div class="single-distances">
            {{ ceil(calculateDistance($results['x'], $results['y'], 54.1890882076046, 15.6084522886298)*0.014)}} minut do hotelu arka medical
        </div>
        
    </div>
</section>


<br>
<br>
<br>

@endsection