<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Заголовок не назначен')</title>
    @include('layouts.cdns')
</head>
<body>
    <div id="app">
        @yield('content')
    </div>
</body>
</html>