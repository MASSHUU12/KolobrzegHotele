@extends('master')

@section('title', 'Polityka plików cookies')

@section('content')

<section class="info-page">
    <div class="info-page-inner">
        <div class="info-title">
            <div>
                <h1>{{__('Polityka plików ')}}<br> {{__('"cookies"')}}</h1>
                <p>{{__('Niniejsza Polityka dotyczy plików "cookies" i odnosi się do ')}}<br> {{__('wszystkich podstron tego serwisu.')}}</p>
            </div>
        </div>
        <div class="info-top">
            <div class="info-main-image">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="30em" height="30em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 64 64">
                    <path d="M36.9 22.7l2.5-18.6C37 3.5 34.6 2 32 2c-2.6 0-5 1.5-7.5 2.2c-2.5.6-5.3.5-7.5 1.8s-3.6 3.8-5.4 5.6C9.8 13.4 7.3 14.8 6 17c-1.3 2.2-1.2 5-1.9 7.5C3.5 27 2 29.4 2 32c0 2.6 1.5 5 2.2 7.5c.6 2.5.5 5.3 1.8 7.5s3.8 3.6 5.6 5.4c1.8 1.8 3.1 4.3 5.4 5.6c2.2 1.3 5 1.2 7.5 1.9c2.5.6 4.9 2.1 7.5 2.1c2.6 0 5-1.5 7.5-2.2c2.5-.7 5.3-.6 7.5-1.9c2.2-1.3 3.6-3.8 5.4-5.6c1.8-1.8 4.3-3.1 5.6-5.4c1.3-2.2 1.2-5 1.9-7.5c.6-2.4 2.1-4.8 2.1-7.4c0-2.6-2.1-8.1-2.1-8.1l-23-1.2" fill="#dda85f" />
                    <path d="M59.4 22.4c-1 .3-2.4.2-3.9-.4c-2.1-.8-3.4-2.5-3.8-4.5c-1 .3-3.4 0-5-1c-2.4-1.5-2.9-5.7-2.9-5.7c-2.7-.8-4.7-4-4.4-6.7c-2.2-.6-5-.5-7.4-.5c-2.4 0-4.6 1.4-6.8 2c-2.3.6-4.9.5-6.9 1.7s-3.3 3.5-4.9 5.1c-1.7 1.7-4 2.9-5.1 4.9c-1.2 2-1.1 4.6-1.7 6.9c-.6 2.2-2 4.4-2 6.8c0 2.4 1.4 4.6 2 6.8c.6 2.3.5 4.9 1.7 6.9s3.5 3.3 5.1 4.9c1.7 1.7 2.9 4 4.9 5.1c2 1.2 4.6 1.1 6.9 1.7c2.2.6 4.4 2 6.8 2c2.4 0 4.6-1.4 6.8-2c2.3-.6 4.9-.5 6.9-1.7s3.3-3.5 4.9-5.1c1.7-1.7 4-2.9 5.1-4.9c1.2-2 1.1-4.6 1.7-6.9c.6-2.2 3-4 3.3-6.4c.8-3.9-1.2-8.3-1.3-9" fill="#f2cb7d" />
                    <g fill="#dda85f">
                        <path d="M50.1 10.8l-1.4 1.4l-1.3-1.4l1.3-1.3z" />
                        <path d="M55.8 17.8l-.6.7l-.7-.7l.7-.7z" />
                        <path d="M50.8 13.2l-.7.7l-.7-.7l.7-.7z" />
                        <path d="M44.6 7.1l-.7.7l-.7-.7l.7-.7z" />
                        <path d="M57.2 20.3l-.7.7l-.7-.7l.7-.7z" />
                        <path d="M57.8 17.8l-.7.7l-.7-.7l.7-.7z" />
                    </g>
                    <path d="M11.8 20.6c-1 1.7.5 4.8 2.5 5.7c2.9 1.2 4.6 1.4 6.4-1.7c.6-1.1 1.4-4 1.1-4.7c-.4-1-2.1-3-3.2-3c-3.1.1-6.1 2.5-6.8 3.7" fill="#6d4934" />
                    <path d="M12.3 20.6c-.7 1.2 1.1 4.8 3.5 4.5c3.3-.4 3-7.2 1.6-7.2c-2.4 0-4.6 1.8-5.1 2.7" fill="#a37f6a" />
                    <path d="M45.2 39.1c1.4-.4 2.4-2.9 1.8-4.4c-.9-2.3-1.8-3.3-4.4-2.6c-.9.3-3 1.4-3.2 1.9c-.3.8-.5 2.8.1 3.4c1.7 1.7 4.7 2 5.7 1.7" fill="#6d4934" />
                    <path d="M43.8 36.7c1.1-.3 2.8-3.7 1-3.9c-3.1-.5-5.5 1-5.2 2.7c.3 1.7 3.4 1.4 4.2 1.2" fill="#a37f6a" />
                    <path d="M24.9 44.5c-.3-1.2-2.5-2.1-3.9-1.5c-2 .8-2.9 1.5-2.2 3.8c.2.8 1.2 2.6 1.7 2.7c.7.3 2.4.4 2.9-.1c1.5-1.4 1.7-4 1.5-4.9" fill="#6d4934" />
                    <path d="M23.2 43.6c-.2-.9-4.4.4-4 2c.8 2.7.8 3.1 1.6 3c1.5-.4 2.5-4.3 2.4-5" fill="#a37f6a" />
                    <path d="M51.1 25.5c-1.2.3-2.1 2.5-1.5 3.9c.8 2 2.7 2.3 4.8 1.2c1.8-.9 1.9-4.1 1.4-4.7c-1.5-1.5-3.8-.6-4.7-.4" fill="#6d4934" />
                    <path d="M50.6 26.6c-.6.7-1.1 3.5.4 3.1c2.7-.8 4.6-3.5 3.4-3.9c-1.5-.5-3.1 0-3.8.8" fill="#a37f6a" />
                    <path fill="#6d4934" d="M22.74 16.112l1.98-1.98l1.98 1.98l-1.98 1.98z" />
                    <g fill="#dda85f">
                        <path d="M14.706 33.483l1.979-1.98l1.98 1.979l-1.979 1.98z" />
                        <path d="M34.698 44.811l1.98-1.98l1.98 1.98l-1.98 1.98z" />
                        <path d="M32.038 39.289l2.687-2.687l2.687 2.687l-2.687 2.687z" />
                        <path d="M24.696 9.827l2.687-2.687l2.687 2.687l-2.687 2.687z" />
                    </g>
                    <g fill="#6d4934">
                        <path d="M41.122 46.347l1.98-1.98l1.98 1.98l-1.98 1.98z" />
                        <path d="M49.076 35.215l1.98-1.98l1.98 1.98l-1.98 1.98z" />
                        <path d="M41.812 24.637l.99-.99l.99.99l-.99.99z" />
                        <path d="M13.726 38.266l.99-.99l.99.99l-.99.99z" />
                    </g>
                </svg>
            </div>
            <div>
                <h2>{{__('Czym są pliki "cookies"?')}}</h2>
                <p>{{__('Poprzez pliki "cookies" należy rozumieć pliki tekstowe, przechowywane w urządzeniach użytkowników (takich jak komputer, telefon lub tablet), przesyłane przez strony internetowe. Pliki te pozwalają rozpoznać urządzenie użytkownika i odpowiednio wyświetlić stronę internetową dostosowaną do jego indywidualnych preferencji, umożliwiają wyświetlenie strony internetowej w języku użytkownika "zapamiętanym" przez te pliki, a także wykorzystanie innych ustawień strony internetowej wybranych przez użytkownika. "Cookies" zazwyczaj zawierają nazwę strony internetowej z której pochodzą, czas przechowywania ich na urządzeniu końcowym oraz unikalny numer.')}}</p>
            </div>
        </div>
        <div class="info-long">
            <article>
                <h3>{{__('W jaki sposób wykorzystujemy pliki "cookies"?')}}</h3>
                <p>{{__('Pliki "cookies" używane są przez nas do przechowywania informacji o tym które powiadomienia zostały już przez użytkownika zamknięte np. powiadomienie o cookies, te informacje są przechowywane lokalnie na komputerze użytkownika i nie wykorzystujemy ich w żaden nieodpowiedni sposób, mają służyć tylko i wyłącznie wygodzie użytkownika.')}}</p>
            </article>
            <article>
                <h3>{{__('Jakich plików "cookies" używamy?')}}</h3>
                <p>{{__('Stosowane są przez nas pliki "stałe", pozostają one na urządzeniu użytkownika przez czas określony w parametrach plików "cookies" lub do momentu ich ręcznego usunięcia przez użytkownika.')}}</p>
            </article>
            <article>
                <h3>{{__('Czy pliki "cookies" zawierają dane osobowe?')}}</h3>
                <p>{{__('Nie, żadne informacje przechowywane w tych plikach nie są danymi osobowymi ani nie pozwalają na zidentyfikowanie użytkownika. Znajdują się w nich tylko i wyłącznie informacje pozwalające na wyświetlenie zapisanych ofert.')}}</p>
            </article>
        </div>
    </div>
</section>

@endsection