@extends('layouts::error')

@section('title')

@section('code', 503)

@section('text')
    <div class="d-flex align-items-center">
        <img src="{{ asset('/images/logo.png') }}" alt="" class="img-fluid" style="max-height: 70px; margin-right: 12px">
        <div class="d-block">
            <h4 class="fs-5 mb-0">Томсктур</h4>
            <p class="mb-0">На сайте ведутся технические работы, приносим извинения за неудобства.</p>
        </div>
    </div>
@endsection