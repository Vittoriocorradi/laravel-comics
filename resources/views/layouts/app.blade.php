<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="/favicon.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')</title>
    {{-- Importazione JS --}}
    @vite('resources/js/app.js')
</head>
<body>
    {{-- Header --}}
    <header>
        @include('partials.header-top')
        @include('partials.header-bottom')
        @include('partials.header-jumbo')
    </header>
    {{-- /Header --}}

    {{-- Main --}}
    <main>
        @yield('page-main')
    </main>
    {{-- /Main --}}

    {{-- Footer --}}
    <footer>
        {{-- Includi solo se nella home --}}
        @if (Route::currentRouteName() === 'home')
            @include('partials.footer-top')
        @endif    
        @include('partials.footer-mid')
        @include('partials.footer-bottom')
    </footer>
    {{-- /Footer --}}
</body>
</html>