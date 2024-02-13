@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Treni</h1>
    <ul>
        @foreach ($trenos as $treno)
            <li class="mb-5">
                <div>Azienda: {{ $treno->azienda }} </div>
                <div>Stazione di partenza: {{ $treno->stazione_di_partenza }}</div>
                <div>tazione di arrivo: {{ $treno->stazione_di_arrivo }}</div>
                <div>Orario partenza: {{ $treno->orario_partenza }}</div>
                <div>Orario arrivo: {{ $treno->orario_arrivo }}</div>
                <div>Codice treno: {{ $treno->codice_treno }}</div>
                <div>Numero carrozza: {{ $treno->numero_carrozze }}</div>
                <div>data: {{ $treno->data }}</div>
            </li>
        @endforeach
    </ul>
@endsection
