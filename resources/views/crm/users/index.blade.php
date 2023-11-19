@extends('layouts.crm')
@section('title', 'Пользователи')

@section('content')
<div class="row mb-4">
    <div class="col-12">
        <h3>Пользователи</h3>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Имя</th>
                <th scope="col">Телефон</th>
                <th scope="col">Статус</th>
                <th scope="col">Действия</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td class="col-3">{{ $user->name }}</td>
                        <td>{{ $user->tel }}</td>
                        <td class="{{ $user->active ? 'text-success' : 'text-danger' }}">
                            {{ $user->active ? 'Активно' : 'Не активно' }}
                        </td>
                        <td>
                            <a href="{{ route('crm.users.edit', $user->id ) }}">
                                <i class="fa fa-pencil text-primary"></i>
                            </a>
                            <a href="{{ route('crm.users.show', $user->id ) }}" class="mx-2">
                                <i class="fa fa-eye text-info"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection
