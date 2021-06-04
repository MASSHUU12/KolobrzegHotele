<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Icons -->
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="{{ asset('js/swup.js') }}" defer></script>
    <script src="{{ asset('js/swupScriptsPlugin.min.js') }}" defer></script>
    <script src="{{ asset('js/swupFormsPlugin.min.js') }}" defer></script>
    <script src="{{ asset('js/swupTransitions.js') }}" defer></script>
</head>

<body>
    <noscript>
        <div class="noscript">
            Strona wymaga JavaScript do poprawnego działania.
        </div>
    </noscript>
    <header>
        <div class="header-logo"><a href="/">KołobrzegHotele</a></div>
        <div class="header-links">
            <ul>
                <li>{{__('szukaj')}}</li>
                <li>{{__('lokalizacje')}}</li>
                <li>
                    <div class="header-language">
                        <img src="{{ asset('img/ico_pl.png') }}" class="language-flag" id="language-main-flag">
                        <div id="langauge-dropdown">
                            <a href="/pl">
                                <div>
                                    <img src="{{ asset('img/ico_pl.png') }}" class="language-flag" alt="language">polski
                                </div>
                            </a>
                            <a href="/en">
                                <div>
                                    <img src="{{ asset('img/ico_us.png') }}" class="language-flag" alt="language">English
                                </div>
                            </a>
                            <a href="/de">
                                <div>
                                    <img src="{{ asset('img/ico_ge.png') }}" class="language-flag" alt="language">Deutsch
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <script src="{{ asset('js/headerAnim.js') }}"></script>
    </header>
    <main id="swup" class="transition-main">
        @yield('content')
    </main>
    <div class="cookie-banner">
        <span class="iconify" id="cookie-icon" data-icon="la:cookie-bite" data-inline="false"></span>
        <p>{{__('Niniejszy serwis wykorzystuje pliki cookies do prawidłowego działania, kontynuując korzystanie z serwisu wyrażasz zgodę na ich wykorzystywanie.')}}<br />
            {{__('Więcej informacji znajdziesz w ')}}<a class="cookie-banner-a" href="./cookies">{{__('polityce plików cookies')}}</a>{{__(' oraz w ')}}<a class="cookie-banner-a" href="./privacy">{{__('polityce prywatności.')}}</a></p>
        <button class="button-primary" id="cookie-btn">{{__(('Rozumiem'))}}</button>
    </div>
    <div class="help-banner">
        <span class="iconify" id="help-btn" data-icon="bi:x" data-inline="false"></span>
        <p>{{__('Jesteś tu nowy?')}}<br />{{__('Sprawdź jak to działa.')}}</p>
        <button class="button-primary" onclick="showHelp()">{{__('Pomoc')}}</button>
    </div>
    <div class="help-content-container" id="helpContentContainer">
        <div class="help-content">
            <span class="iconify" id="help-btn-content" data-icon="bi:x" data-inline="false" onclick="hideHelp()"></span>
            <h1>{{__('Jak to działa?')}}</h1>
            <p>{{__('Na górze strony ')}}<a href="{{url(app()->getLocale()).'/'}}">{{__('głównej')}}</a>{{__(' znajduje się pole wyszukiwania.')}}</p>
            <p>{{__('W tym polu znajduje się 6 kategorii, są to: plaże, rowery miejskie, parki, place zabaw, wybiegi dla psów oraz standard.')}}</p>
            <p>{{__('Abyśmy byli w stanie znaleźć nocleg dopasowany do Twoich preferencji musisz zaznaczyć w poszczególnych kategoriach jak istotne są one dla Ciebie. Możesz to zrobić klikając na daną kategorię oraz wybrać numer od 1 do 5, gdzie 5 oznacza bardzo istotne a 1 nieistotne lub bez znaczenia abyśmy nie brali danej kategorii pod uwagę.')}}</p>
            <p>{{__('Gdy już wszystko wybierzesz kliknij "szukaj" a my zajmiemy się resztą i przekierujemy Ciebie na stronę wyników.')}}</p>
            <p>{{__('Powodzenia!')}}</p>
        </div>
    </div>
    <script data-swup-ignore-script src="{{ asset('js/cookieConsent.js') }}"></script>
    <svg class="footer-wave" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="25em" height="15em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36">
        <path fill="#226699" d="M33.398 23.678c-7.562 4.875-20.062-.438-18.375-8.062c1.479-6.684 9.419-4.763 11.225-3.861c1.806.902.713-3.889-3.475-5.327C17.1 4.48 10.156 4.893 7.961 14.678c-1.5 6.687 1.438 16.062 12.719 16.187c11.281.125 12.718-7.187 12.718-7.187z" />
        <path fill="#1c2541" d="M35.988 25.193c0-2.146-2.754-2.334-4-1.119c-2.994 2.919-7.402 4.012-13.298 2.861c-10.25-2-10.341-14.014-3.333-17.441c3.791-1.854 8.289.341 9.999 1.655c1.488 1.143 4.334 2.66 4.185.752C29.223 7.839 21.262-.86 10.595 4.64C-.071 10.14 0 22.553 0 24.803v7.25C0 34.262 1.814 36 4.023 36h28C34.232 36 36 34.262 36 32.053c0 0-.004-6.854-.012-6.86z" />
    </svg>
    <span class="iconify footer-wave-2" data-icon="ic:baseline-waves" data-inline="false"></span>
    <span class="iconify footer-wave-3" data-icon="ic:baseline-waves" data-inline="false"></span>
    <span class="iconify footer-sun" data-icon="emojione:sun" data-inline="false"></span>
    <span class="iconify footer-cloud" data-icon="bi:cloud-fill" data-inline="false" style="color: #F4F9FC;"></span>
    <footer>
        <div class="footer-container">
            <div class="footer-item">
                <h1>{{__('Przydatne Linki')}}</h1>
                <p><a href="{{url(app()->getLocale()).'/'}}">{{__('Strona główna')}}</a></p>
                <p><a href="http://www.kolobrzeg.pl/" target="_blank" rel="noreferrer noopener">{{__('Portal UM Kołobrzeg')}}</a></p>
                <p><a href="http://www.opendata.gis.kolobrzeg.pl/" target="_blank" rel="noreferrer noopener">{{__('Kołobrzeskie Otwarte Dane')}}</a></p>
            </div>
            <div class="footer-item">
                <h1>{{__('Informacje')}}</h1>
                <p><a href="{{url(app()->getLocale()).'/about'}}">{{__('O Nas')}}</a></p>
                <p><a href="{{url(app()->getLocale()).'/cookies'}}">{{__('Polityka Cookies')}}</a></p>
                <p><a href="{{url(app()->getLocale()).'/privacy'}}">{{__('Polityka Prywatności')}}</a></p>
            </div>
            <div class="footer-item">
                <h1>{{__('Pozostałe')}}</h1>
                <p><a href="{{url(app()->getLocale()).'/maps?type=bike'}}">{{__('Mapa Stacji Rowerów Miejskich')}}</a></p>
                <p><a href="{{url(app()->getLocale()).'/maps?type=recreation'}}">{{__('Mapa Terenów Rekreacyjnych')}}</a></p>
                <p><a href="{{url(app()->getLocale()).'/maps?type=playground'}}">{{__('Mapa Placów Zabaw')}}</a></p>
                <p><a href="{{url(app()->getLocale()).'/maps?type=dog'}}">{{__('Mapa Wybiegów dla Psów')}}</a></p>
            </div>
            <div class="footer-item">
                <h1>{{__('Kontakt')}}</h1>
                <p><a href="mailto: kontakt@kontakt.com">kontakt@kontakt.com</a></p>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/searchDetails.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js" integrity="sha512-cdV6j5t5o24hkSciVrb8Ki6FveC2SgwGfLE31+ZQRHAeSRxYhAQskLkq3dLm8ZcWe1N3vBOEYmmbhzf7NTtFFQ==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js"></script>

    <script src="{{ asset('js/searchbarDropdown.js') }}"></script>
    <script src="{{ asset('js/homeLoading.js') }}" defer></script>

</body>
</html>