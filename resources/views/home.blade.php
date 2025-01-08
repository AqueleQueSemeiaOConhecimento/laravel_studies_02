@extends('layouts.main_layout')

@section('content')

@production
    <p>Estou em ambiente de produção</p>
    
    @else
        <p>Não estou em ambiente de produção</p>
        <p>{{ $value }}</p>
@endproduction

@env(['production', 'local', 'development'])
    <p>Estou no ambiente {{ env('APP_ENV') }}</p>
@endenv

{{-- Formulario --}}
<form action="{{ route('submit') }}" method="post">
    @csrf

    <div>
        <input type="text" name="name">
        
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <div>
        <input type="text" name="country">
        
        @error('country')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <button type="submit">Enviar</button>
</form>

@endsection