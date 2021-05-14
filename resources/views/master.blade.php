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
</head>

<body>
    <header>
        <div class="header-logo"><a href="/">KołobrzegHotele</a></div>
        <div class="header-links">
            <ul>
                <li><img src="{{ asset('img/ico_pl.png') }}" class="language-flag" alt="language"></li>
                <li><img src="{{ asset('img/ico_ge.png') }}" class="language-flag" alt="language"></li>
                <li><img src="{{ asset('img/ico_us.png') }}" class="language-flag" alt="language"></li>
            </ul>
        </div>
        <script src="{{ asset('js/headerAnim.js') }}"></script>
    </header>
    @yield('content')
    <div class="cookie-banner">
        <p>Niniejszy serwis wykorzystuje pliki cookies do prawidłowego działania, korzystając z serwisu wyrażasz zgodę na ich wykorzystywanie.<br />
            Więcej informacji znajdziesz w <a class="cookie-banner-a" href="./cookies">polityce plików cookies </a>oraz w <a class="cookie-banner-a" href="./privacy">polityce prywatności.</a></p>
        <button class="button-primary" id="cookie-btn">Rozumiem</button>
    </div>
    <script src="{{ asset('js/cookieConsent.js') }}"></script>
    <footer>
        <div class="footer-container">
            <div class="footer-item">
                <h1>Przydatne Linki</h1>
                <p><a href="/">Strona główna</a></p>
                <p><a href="http://www.kolobrzeg.pl/" target="_blank" rel="noreferrer noopener">Portal UM Kołobrzeg</a></p>
                <p><a href="http://www.opendata.gis.kolobrzeg.pl/" target="_blank" rel="noreferrer noopener">Kołobrzeskie Otwarte Dane</a></p>
            </div>
            <div class="footer-item">
                <h1>Informacje</h1>
                <p><a href="/about">O Nas</a></p>
                <p><a href="/cookies">Polityka Cookies</a></p>
                <p><a href="/privacy">Polityka Prywatności</a></p>
            </div>
            <div class="footer-item">
                <h1>Pozostałe</h1>
                <p><a href="/maps?type=bike">Mapa Stacji Rowerów Miejskich</a></p>
                <p><a href="/maps?type=recreation">Mapa Terenów Rekreacyjnych</a></p>
                <p><a href="/maps?type=playground">Mapa Placów Zabaw</a></p>
                <p><a href="/maps?type=dog">Mapa Wybiegów dla Psów</a></p>
            </div>
            <div class="footer-item">
                <h1>Kontakt</h1>
                <p>kontakt@kontakt.com</p>
            </div>
        </div>
    </footer>
</body>

</html>