@extends('layouts.main_layout')

@section('content')

{{-- for --}}
@for($index = 0; $index < 5; $index++)
    <h1>{{ $index }}</h1>=
@endfor

{{-- foreach --}}
@foreach($cities as $city)
    <h1>{{ $city }}</h1>
@endforeach

{{-- forelse --}}
@forelse($names as $name)
    <h1>{{ $name }}</h1>
@empty
    <p>Names está vazio</p>
@endforelse

{{-- while --}}
@while($indice < 10)
    <p>Indice => {{ $indice }}</p>

    @php
        $indice++;
    @endphp

@endwhile

@endsection
