@extends('layouts.base')

@section('content')
    <div class="card bg-dark text-white">
        <div class="card-header">{{ __('Bienvenido a Full Fashion') }}</div>
        <div class="card-body">
            <p>El único crud que funciona de momento es el de marcas</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('marcas.index') }}" class="btn btn-primary">{{ __('Gestión de Marcas') }}</a>
        </div>
    </div>
@endsection
