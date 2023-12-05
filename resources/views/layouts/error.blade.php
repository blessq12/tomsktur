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
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="error">
                        <div class="code d-none d-md-flex">@yield('code')</div>
                        <div class="text">@yield('text')</div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-start justify-content-md-center mt-3">
                    <a href="tel:{{ $company->tel }}" class="btn btn-outline-primary d-none d-md-block w-50"> {{ $company->tel }} </a>
                    <a href="tel:{{ $company->tel }}" class="btn btn-outline-primary d-block d-md-none w-100"> {{ $company->tel }} </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>