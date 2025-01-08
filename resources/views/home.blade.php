@extends('layouts.main_layout')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-6">

            <form action="{{ route("submit") }}" method="post">
                
                @csrf

                <div class="mb-3">
                    <label class="form-label">Username:</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Password:</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="mb-3">
                    <button class="btn btn-primary">Login</button>
                </div>
            </form>

        </div>
    </div>
</div>

{{-- Executar php dentro de uma view --}}
@php

    $valor = "Matheus";
    $valor1 = '<span class="text-warning">' . $valor . '</span>';
    $valor2 = 100;

@endphp

<h3>{{ $valor }}</h3>
<h3>{!! $valor1 !!}</h3>
<h3>{{ $valor2 * 1000 }}</h3>
<h3>$nome tem <span class="text-info">{{ strlen($valor) }}</span> caracteres</h3>

@endsection