@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2>Crear Marca</h2>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ups!</strong> Algo esta mal..<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('marcas.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 mt-2">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input required='' type="text" name="nombre" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 mt-2">
                <div class="form-group">
                    <strong>País de origen:</strong>
                    <input required='' type="text" name="pais_origen" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8 mt-2">
                <div class="form-group">
                    <strong>Descripción:</strong>
                    <input class="form-control" name="descripcion"></input>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1 mt-2">
                    <div class="mb-2">
                        <button type="submit" class="btn btn-primary">Crear</button>
                    </div>
                </div>
                <div class="col-md-1 mt-2">
                    <div class="mb-2">
                        <a href="{{ route('marcas.index') }}" class="btn btn-primary">Volver</a>
                    </div>
                </div>
            </div>
        </div>
</div>
</form>
</div>
@endsection