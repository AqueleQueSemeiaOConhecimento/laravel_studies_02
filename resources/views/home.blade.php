@extends('layouts.main_layout')

@section('content')

{{-- instrução IF simples --}}
@if($value < 30)
    <h1>O valor é menor que 30, o valor é igual a: {{ $value }}</h1>
{{-- instrução ELSEIF --}}
@elseif($value > 30 && $value < 50)
    <h1>O valor é maior que 30 e menor que 50, o valor é {{ $value }}</h1>
{{-- instrução IF ELSE --}}
@else
    <h1>O valor é maior que 30, o valor é igual a: {{ $value }}</h1>
@endif

@endsection
