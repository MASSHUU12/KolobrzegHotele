<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="header-logo">KołobrzegHotele</div>
            <div class="header-links">
                <ul>
                    <li>one</li>
                    <li>one</li>
                    <li><img src="{{ asset('img/polish.png') }}" class="language-flag" alt="language"></li>
                </ul>
            </div>
        </header>
        @yield('content')
        <footer>
        footer
        </footer>
    </body>
</html>
