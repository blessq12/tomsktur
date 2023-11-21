@extends('layouts.front')
@section('title', 'ТомскТур')

@section('content')
<section id="hero-banner">
    <hero-banner></hero-banner>
</section>
<section class="pt-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Часто ищут</h2>
                    <hr class="w-50">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="actual-suggest">
                    <li>
                        <div class="suggest-item position-relative">
                            <img src="//via.placeholder.com/600x400" alt="" class="position-absolute img-fluid">
                            <div class="overlay"></div>
                            <div class="position-relative">
                                <h5>Зарубежные туры</h5>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="suggest-item position-relative" style="background: url('//via.placeholder.com/600x400')">
                            <img src="//via.placeholder.com/600x400" alt="" class="position-absolute img-fluid">
                            <div class="overlay"></div>
                            <div class="position-relative">
                                <h5>Россия и СНГ</h5>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="suggest-item position-relative" style="background: url('//via.placeholder.com/600x400')">
                            <img src="//via.placeholder.com/600x400" alt="" class="position-absolute img-fluid">
                            <div class="overlay"></div>
                            <div class="position-relative">
                                <h5>Детский туризм</h5>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="suggest-item position-relative" style="background: url('//via.placeholder.com/600x400')">
                            <img src="//via.placeholder.com/600x400" alt="" class="position-absolute img-fluid">
                            <div class="overlay"></div>
                            <div class="position-relative">
                                <h5>Детский туризм</h5>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection