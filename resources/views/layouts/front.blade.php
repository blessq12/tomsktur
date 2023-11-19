<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Название страницы не задано')</title>

    @include('layouts.cdns')
    @vite('resources/js/app.js')
    @vite('resources/sass/front/app.sass')
</head>
<body>
    <div id="app">
        @auth
            <x-crm.topbar></x-crm.topbar>
        @endauth
        <x-front.navbar></x-front.navbar>
        @yield('content')
        <x-front.footer></x-front.footer>
    </div>
</body>
</html>