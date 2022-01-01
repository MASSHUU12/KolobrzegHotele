<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>KołobrzegHotele | @yield('title')</title>
        <!-- Fonts -->
        <link
            href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"
            rel="stylesheet"
        />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
        <!-- Icons -->
        <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
        <!-- GSAP -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    </head>

    <body>
        <noscript>
            <div class="noscript">
                {{ __("Strona wymaga JavaScript do poprawnego działania.") }}
            </div>
        </noscript>
        <header>
            <div class="header-logo">
                <a href="/">KołobrzegHotele</a>
            </div>
            <div class="header-links">
                <ul>
                    <li>
                        <a href="/">{{ __("znajdź") }}</a>
                    </li>
                    <li>
                        <a href="/searchquery">{{ __("szukaj") }}</a>
                    </li>
                    <li>
                        <div class="header-language">
                            @if(str_replace('_', '-', app()->getLocale()) ==
                            "pl")
                            <span
                                class="iconify"
                                data-icon="twemoji:flag-for-flag-poland"
                                data-width="38"
                                id="language-main-flag"
                            ></span>
                            @elseif(str_replace('_', '-', app()->getLocale()) ==
                            "en")
                            <span
                                class="iconify"
                                data-icon="twemoji:flag-for-flag-united-states"
                                data-width="38"
                                id="language-main-flag"
                            ></span>
                            @else
                            <span
                                class="iconify"
                                data-icon="twemoji:flag-for-flag-germany"
                                data-width="38"
                                id="language-main-flag"
                            ></span>
                            @endif
                            <div id="langauge-dropdown">
                                <a href="/language/pl">
                                    <div>
                                        <span
                                            class="iconify"
                                            data-icon="twemoji:flag-for-flag-poland"
                                            data-width="38"
                                        ></span>
                                    </div>
                                </a>
                                <a href="/language/en">
                                    <div>
                                        <span
                                            class="iconify"
                                            data-icon="twemoji:flag-for-flag-united-states"
                                            data-width="38"
                                        ></span>
                                    </div>
                                </a>
                                <a href="/language/de">
                                    <div>
                                        <span
                                            class="iconify"
                                            data-icon="twemoji:flag-for-flag-germany"
                                            data-width="38"
                                        ></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <script src="{{ asset('js/headerAnim.js') }}"></script>
        </header>

        <main class="transition-main">@yield('content')</main>

        {{-- cookie banner --}}
        <div class="cookie-banner" id="c-window">
            <span
                class="iconify"
                id="cookie-icon"
                data-icon="la:cookie-bite"
                data-inline="false"
            ></span>
            <p>
                {{
                    __(
                        "Niniejszy serwis wykorzystuje pliki cookies do prawidłowego działania, kontynuując korzystanie z serwisu wyrażasz zgodę na ich wykorzystywanie."
                    )
                }}
                <span>
                    {{ __("Więcej informacji znajdziesz w ")
                    }}<a class="cookie-banner-a" href="/cookies">{{
                        __("polityce plików cookies")
                    }}</a
                    >{{ __(" oraz w ")
                    }}<a class="cookie-banner-a" href="/privacy">{{
                        __("polityce prywatności.")
                    }}</a>
                </span>
            </p>
            <button class="button-primary" id="c-btn">
                {{ __("Rozumiem") }}
            </button>
        </div>
        {{-- end cookie banner --}}

        {{-- help banner --}}
        <div class="help-banner" id="h-window">
            {{-- I don't know why the click() event didn't want to work with SVG, --}}
            {{-- where it always worked without a problem. --}}
            {{-- For this reason I had to wrap the SVG in a div and give it an id --}}
            <div id="h-btn">
                <span
                    class="iconify"
                    data-icon="bi:x"
                    data-inline="false"
                ></span>
            </div>
            <p>
                {{ __("Jesteś tu nowy?") }}<br />{{
                    __("Sprawdź jak to działa.")
                }}
            </p>
            <button class="button-primary" onclick="help(true)">
                {{ __("Pomoc") }}
            </button>
        </div>
        <div class="help-content-container" id="h-container">
            <div class="help-content">
                <span
                    class="iconify"
                    data-icon="bi:x"
                    data-inline="false"
                    onclick="help(false)"
                ></span>
                <h1>{{ __("Jak to działa?") }}</h1>
                <p>
                    {{
                        __(
                            "Na naszej stronie masz dwie możliwości wyszukiwana hoteli"
                        )
                    }}
                </p>
                <p>
                    1.
                    {{
                        __(
                            "Jeśli nie masz jeszcze upatrzonego noclegu, to wybierz opcję "
                        )
                    }}<a href="/" onclick="hideHelp()">{{ __("znajdź") }}</a>
                </p>
                <p>
                    2.
                    {{
                        __(
                            "Jeśli zastanawiasz się na kilkoma hotelami użyj opcji "
                        )
                    }}<a href="/" onclick="hideHelp()">{{ __("szukaj") }}</a
                    >{{
                        __(
                            ", która pozwoli ci na wyszukanie noclegu wpisując jego nazwę"
                        )
                    }}
                </p>
                <p>
                    {{ __("Wybierając pierwszą opcje na ")
                    }}<a href="/" onclick="hideHelp()">{{
                        __("stronie głównej")
                    }}</a
                    >{{ __(" ujrzysz pole wyszukiwana") }}
                </p>
                <p>
                    {{
                        __(
                            "W tym polu znajduje się 6 kategorii, są to: plaże, rowery miejskie, tereny rekreacyjne, place zabaw, wybiegi dla psów oraz standard noclegu."
                        )
                    }}
                </p>
                <p>
                    {{
                        __(
                            "Abyśmy byli w stanie znaleźć nocleg dopasowany do Twoich preferencji, zaznacz przy użyciu suwaka w poszczególnych kategoriach jak istotne są one dla Ciebie. Im bardziej w góre przesuniesz suwak tym bardziej dana kategoria będzie uwzględniona podczas wyszukiwania"
                        )
                    }}
                </p>
                <p>
                    {{ __("Na górze strony ")
                    }}<a href="/" onclick="hideHelp()">{{ __("głównej") }}</a
                    >{{ __(" znajduje się pole wyszukiwania.") }}
                </p>
                <p>
                    {{
                        __(
                            "W tym polu znajduje się 6 kategorii, są to: plaże, rowery miejskie, parki, place zabaw, wybiegi dla psów oraz standard."
                        )
                    }}
                </p>
                <p>
                    {{
                        __(
                            "Abyśmy byli w stanie znaleźć nocleg dopasowany do Twoich preferencji musisz zaznaczyć w poszczególnych kategoriach jak istotne są one dla Ciebie. Możesz to zrobić klikając na daną kategorię oraz wybrać numer od 1 do 5, gdzie 5 oznacza bardzo istotne a 1 nieistotne lub bez znaczenia abyśmy nie brali danej kategorii pod uwagę."
                        )
                    }}
                </p>
                <p>
                    {{
                        __(
                            'Gdy już wszystko wybierzesz kliknij "szukaj" a my zajmiemy się resztą i przekierujemy Ciebie na stronę wyników.'
                        )
                    }}
                </p>
                <p>{{ __("Powodzenia!") }}</p>
            </div>
        </div>
        {{-- end help banner --}}

        <footer>
            <div class="footer-container">
                <div class="footer-item">
                    <h1>{{ __("Przydatne Linki") }}</h1>
                    <p>
                        <a href="/">{{ __("Strona główna") }}</a>
                    </p>
                    <p>
                        <a
                            href="http://www.kolobrzeg.pl/"
                            target="_blank"
                            rel="noreferrer noopener"
                            >{{ __("Portal UM Kołobrzeg") }}</a
                        >
                    </p>
                    <p>
                        <a
                            href="http://www.opendata.gis.kolobrzeg.pl/"
                            target="_blank"
                            rel="noreferrer noopener"
                            >{{ __("Kołobrzeskie Otwarte Dane") }}</a
                        >
                    </p>
                </div>
                <div class="footer-item">
                    <h1>{{ __("Informacje") }}</h1>
                    <p>
                        <a href="/about">{{ __("O Nas") }}</a>
                    </p>
                    <p>
                        <a href="/cookies">{{ __("Polityka Cookies") }}</a>
                    </p>
                    <p>
                        <a href="/privacy">{{ __("Polityka Prywatności") }}</a>
                    </p>
                </div>
                <div class="footer-item">
                    <h1>{{ __("Pozostałe") }}</h1>
                    <p>
                        <a href="/maps?type=bike">{{
                            __("Mapa Stacji Rowerów Miejskich")
                        }}</a>
                    </p>
                    <p>
                        <a href="/maps?type=recreation">{{
                            __("Mapa Terenów Rekreacyjnych")
                        }}</a>
                    </p>
                    <p>
                        <a href="/maps?type=playground">{{
                            __("Mapa Placów Zabaw")
                        }}</a>
                    </p>
                    <p>
                        <a href="/maps?type=dog">{{
                            __("Mapa Wybiegów dla Psów")
                        }}</a>
                    </p>
                </div>
                <div class="footer-item">
                    <h1>{{ __("Kontakt") }}</h1>
                    <p>
                        <a href="mailto: kontakt@kontakt.com"
                            >kontakt@kontakt.com</a
                        >
                    </p>
                </div>
            </div>
        </footer>

        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"
            integrity="sha512-cdV6j5t5o24hkSciVrb8Ki6FveC2SgwGfLE31+ZQRHAeSRxYhAQskLkq3dLm8ZcWe1N3vBOEYmmbhzf7NTtFFQ=="
            crossorigin="anonymous"
        ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"
            integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g=="
            crossorigin="anonymous"
        ></script>

        @yield('scripts')

        <script src="{{ asset('js/cookieConsent.js') }}"></script>
        <script src="{{ asset('js/helpBanner.js') }}"></script>
        <script src="{{ asset('js/searchbarDropdown.js') }}"></script>
        <script src="{{ asset('js/homeLoading.js') }}" defer></script>
    </body>
</html>
