@extends('layouts.crm')
@section('title', 'Компании')

@section('content')
    <div class="row mb-4">
        <div class="col-12">
            <h3>Компания</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Название</th>
                    <th scope="col">Статус</th>
                    <th scope="col">Действия</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($companies as $company)
                        <tr>
                            <th scope="row">{{ $company->id }}</th>
                            <td class="col-6">{{ $company->nameShort }}</td>
                            <td class="text-success">Активна</td>
                            <td>
                                <a href="{{ route('crm.companies.edit' , $company->id ) }}"><i class="fa fa-pencil text-primary"></i></a>
                                <a href="{{ route('crm.companies.show', $company->id ) }}" class="mx-2"><i class="fa fa-eye text-info"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
   
@endsection