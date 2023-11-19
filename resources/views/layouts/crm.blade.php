<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Название не задано')</title>
    @include('layouts.cdns')
    @vite('resources/sass/crm/app.sass')
</head>
<body>
    <x-crm.navbar></x-crm.navbar>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 col-lg-2">
                <x-crm.side-bar></x-crm.side-bar>
            </div>
            <div class="col-8 col-lg-10" style="overflow-y:scroll; height:calc(100vh - 70px)">
                <div class="py-4">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>
</html>