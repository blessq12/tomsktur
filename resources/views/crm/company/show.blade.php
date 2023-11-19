@extends('layouts.crm')
@section('title', 'Просмотр: ' . $company->nameShort )

@section('content')
<div class="row mb-4">
    <div class="col-12">
        <h3>Просмотр: {{ $company->nameShort }}</h3>
        <a href="{{route('crm.companies.index')}}" class="text-primary">Назад</a>
    </div>
</div>
 <div class="row">
    <div class="col-6">
        <h6>Данные организации</h6>
        <ul class="list-unstyled p-0 m-0">
            <li>
                <b>Название:</b> {{ $company->name }}
            </li>
            <li>
                <b>Короткое название:</b> {{ $company->nameShort }}
            </li>
            <li>
                <b>Юридический адрес:</b> {{ $company->addressUR }}
            </li>
            <li>
                <b>Фактический адрес:</b> {{ $company->addressFC }}
            </li>
            <li>
                <b>Директор:</b> {{ $company->owner }}
            </li>
            <li>
                <b>Основание:</b> {{ $company->basis }}
            </li>
            <li>
                <b>Номер телефона:</b> {{ $company->tel }}
            </li>
            <li>
                <b>ИНН:</b> {{ $company->inn }}
            </li>
            <li>
                <b>КПП:</b> {{ $company->kpp }}
            </li>
            <li>
                <b>ОГРН:</b> {{ $company->ogrn }}
            </li>
        </ul>
    </div>
    <div class="col-6">
        <h6>Банковские реквизиты</h6>
        <ul class="list-unstyled p-0 m-0">
            <li>
                <b>Наименование:</b> {{ $company->bankRequisite->name }}
            </li>
            <li>
                <b>Рассчетный счет:</b> {{ $company->bankRequisite->checkAccount }}
            </li>
            <li>
                <b>Корреспондентский счет:</b> {{ $company->bankRequisite->corrAccount }}
            </li>
            <li>
                <b>БИК банка:</b> {{ $company->bankRequisite->bik }}
            </li>
            <li>
                <b>ОГРН банка:</b> {{ $company->bankRequisite->ogrn }}
            </li>
            <li>
                <b>ОКПО банка:</b> {{ $company->bankRequisite->okpo }}
            </li>
            <li>
                <b>ОКАТО банка:</b> {{ $company->bankRequisite->okato }}
            </li>
        </ul>
    </div>
 </div>
@endsection