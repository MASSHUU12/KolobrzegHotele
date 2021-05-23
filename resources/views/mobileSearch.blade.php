@extends('master')

@section('title', 'Wyszukiwanie')

@section('content')

<section class="mobile-search-all">
    <p class="mobile-search-all-p">Zaznacz co jest dla ciebie najważniejsze, a my znajdziemy twój idealny nocleg.</p>
    <div class="mobile-search-container">
        @include('searchbar')
    </div>
</section>

@endsection