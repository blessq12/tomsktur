<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
    @include('layouts::cdns')
    @vite('resources/sass/errors.sass')
</head>
<body>
    <div class="wrap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="error">
                        <div class="code">@yield('code')</div>
                        <div class="text">@yield('text')</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>