@extends('layouts.crm')
@section('title', 'Редактирование: ' . $company->nameShort)

@section('content')
    <div class="row mb-4">
        <div class="col-12">
            <h3>Редактирование: {{ $company->nameShort }}</h3>
            <a href="{{route('crm.companies.index')}}" class="text-primary">Назад</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-6 mb-4">
            @if (session('company'))
                <div class="alert alert-success">
                    {{ session('company') }}
                </div>
            @endif
            <h6>Компания</h6>
            <form action="{{ route('crm.companies.update', $company->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Название: </label>
                    <input type="text" name="name" id="name" value="{{ old( 'name', $company->name) }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nameShort">Короткое название: </label>
                    <input type="text" name="nameShort" id="nameShort" class="form-control" value="{{ old( 'nameShort' , $company->nameShort) }}">
                </div>
                <div class="form-group">
                    <label for="addressUR">Юридический адрес: </label>
                    <input type="text" name="addressUR" id="addressUR" class="form-control" value="{{ old( 'addressUR' , $company->addressUR) }}">
                </div>
                <div class="form-group">
                    <label for="addressFC">Фактический адрес: </label>
                    <input type="text" name="addressFC" id="addressFC" class="form-control" value="{{ old( 'addressFC' , $company->addressFC) }}">
                </div>
                <div class="row mb-4">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="owner">Директор: </label>
                            <input type="text" name="owner" id="owner" class="form-control" value="{{ old( 'owner' , $company->owner) }}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="basis">Основание: </label>
                            <input type="text" name="basis" id="basis" class="form-control" value="{{ old( 'basis' , $company->basis) }}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="tel">Номер телефона: </label>
                            <input type="text" name="tel" id="tel" class="form-control" value="{{ old( 'tel' , $company->tel) }}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="inn">ИНН: </label>
                            <input type="text" name="inn" id="inn" class="form-control" value="{{ old( 'inn' , $company->inn) }}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="kpp">КПП: </label>
                            <input type="text" name="kpp" id="kpp" class="form-control" value="{{ old( 'kpp' , $company->kpp) }}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="ogrn">ОГРН: </label>
                            <input type="text" name="ogrn" id="ogrn" class="form-control" value="{{ old( 'ogrn' , $company->ogrn) }}">
                        </div>
                    </div>
                </div>
                
                
                
                
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </form>
        </div>
        <div class="col-12 col-lg-6">
            @if (session('requisite'))
                <div class="alert alert-success">
                    {{ session('requisite') }}
                </div>
            @endif
            <h6>Банковские реквизиты</h6>
            <form action="{{ route('crm.companies.requisites.update', $company->id) }}" method="post">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="name">Наименование</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $company->bankRequisite->name) }}">
                </div>
                <div class="form-group">
                    <label for="checkAccount">Рассчетный счет</label>
                    <input type="text" name="checkAccount" id="checkAccount" class="form-control" value="{{ old('checkAccount', $company->bankRequisite->checkAccount) }}">
                </div>
                <div class="form-group">
                    <label for="corrAccount">Корреспондентский счет</label>
                    <input type="text" name="corrAccount" id="corrAccount" class="form-control" value="{{ old('corrAccount', $company->bankRequisite->corrAccount) }}">
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="bik">БИК банка</label>
                            <input type="text" name="bik" id="bik" class="form-control" value="{{ old('bik', $company->bankRequisite->bik) }}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="ogrn">ОГРН банка</label>
                            <input type="text" name="ogrn" id="ogrn" class="form-control" value="{{ old('ogrn', $company->bankRequisite->ogrn) }}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="okpo">ОКПО банка</label>
                            <input type="text" name="okpo" id="okpo" class="form-control" value="{{ old('okpo', $company->bankRequisite->okpo) }}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="okato">ОКАТО банка</label>
                            <input type="text" name="okato" id="okato" class="form-control" value="{{ old('ookatokpo', $company->bankRequisite->okato) }}">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </form>
        </div>
    </div>
@endsection