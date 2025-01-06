@extends('layouts.main_layout')

@section('content')

{{-- empty => ver se a variavel esta vazia, se é 0, se é nulo --}}
@empty($value)
    <p>Não existe</p>
@else
    <p>Existe</p>
@endempty

{{-- isset => verifica se a variavel esta definida e não é null --}}
@isset($value)
    <p>Existe a variável</p>
@else
    <p>Não existe a variável</p>
@endisset

{{-- unless => a menos que --}}

@unless($value == 100)
    <p>OK!!!!</p>
@endunless

@endsection
