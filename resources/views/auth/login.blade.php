@extends('layouts.minimal')
@section('title')

@section('content')
    <div class="wrapper d-flex align-items-center" style="height:100vh;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4">
                    
                    {{-- info section --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-unstyled p-0 m-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session('activation'))
                        <div class="alert alert-warning">
                            <p class="mb-0">{{ session('activation') }}</p>
                        </div>
                    @endif
                    @if (session('user'))
                        <div class="alert alert-warning">
                            <p class="mb-0">{{ session('user') }}</p>
                        </div>
                    @endif
                    {{-- end info section --}}
                    <form action="{{ route('auth.user-login') }}" method="post" class="rounded p-3 border border-primary">
                        @csrf
                        <div class="form-group mb-2">
                            <label for="email">Логин: </label>
                            <div class="input-group">
                                <input type="email" name="email" id="email" class="form-control" autocomplete="username" required value="{{ old('email') }}">
                                <span class="input-group-text">@</span>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="password">Пароль: </label>
                            <div class="input-group">
                                <input type="password" name="password" id="password" class="form-control" autocomplete="current-password">
                                <span class="input-group-text" style="cursor: pointer">
                                    <i class="fa fa-eye" ></i>
                                </span>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">
                            Войти
                        </button>
                        <a href="{{ route('auth.register') }}" class="btn btn-outline-primary mx-2">Регистрация</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection