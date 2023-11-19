@extends('layouts.minimal')
@section('title', 'Регистрация')

@section('content')
    <div class="wrap d-flex align-items-center" style="height: 100vh">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4">
                    {{-- header --}}
                    <div class="d-flex justify-content-start align-items-center">
                        <h4>Регистрация</h4>
                        <a href="{{ route('main.index') }}" class="text-primary mx-2" style="font-size: 12px">На главную</a>
                    </div>
                    {{-- info section --}}
                    <div class="alert alert-success">
                        <p class="mb-0">Успешная регистрация</p>
                    </div>
                    <div class="alert alert-danger">
                        <p class="mb-0">Ошибки валидации</p>
                    </div>
                    <div class="alert alert-warning">
                        <p class="mb-0">Предупреждения</p>
                    </div>
                    {{-- end info section --}}
                    <form action="{{ route('auth.user-register') }}" method="post" class="border border-primary rounded p-3">
                        @csrf
                        <div class="form-group mb-2">
                            <label for="email">Email адрес: </label>
                            <div class="input-group">
                                <input type="email" name="email" id="email" class="form-control" autocomplete="email" required>
                                <span class="input-group-text">
                                    @
                                </span>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="name">Ваше имя: </label>
                            <div class="input-group">
                                <input type="text" name="name" id="name" class="form-control" required autocomplete="name">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="tel">Номер телефона: </label>
                            <div class="input-group">
                                <input type="text" name="tel" id="tel" class="form-control" required autocomplete="tel" data-maska="+7 (###) ###-##-##">
                                <span class="input-group-text">
                                    <i class="fa fa-phone"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="password">Пароль: </label>
                            <div class="input-group">
                                <input type="password" name="password" id="password" class="form-control" autocomplete="new-password">
                                <span class="input-group-text" style="cursor: pointer">
                                    <i class="fa fa-eye" ></i>
                                </span>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Регистрация</button>
                        <a href="{{ route('auth.login') }}" class="btn btn-outline-primary mx-2">Авторизация</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
         const { Mask, MaskInput, vMaska } = Maska
        new MaskInput("[data-maska]")
    </script>
@endsection