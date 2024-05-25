@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2 class="text-white">CRUD de Marcas</h2>
        </div>
        <div>
            <a href="{{route('marcas.create')}}" class="btn btn-primary">Crear marca</a>
        </div>
    </div>

    @if (Session::get('success'))
        <div class="alert alert-success mt-2">
            <strong>{{Session::get('success')}}</strong>
        </div>

    @endif

    <div class="col-12 mt-4">
        <table class="table table-bordered text-white">
            <tr class="fw-bold">
                <th>Nombre</th>
                <th>Pais de origen</th>
                <th>Descripción</th>
                <th>Acción</th>
            </tr>
            @foreach ($marcas as $marca)
                <tr>
                    <td>{{$marca->nombre}}</td>
                    <td>{{$marca->pais_origen}}</td>
                    <td>{{$marca->descripcion}}</td>
                    <td>
                        <a href="{{route('marcas.edit', $marca)}}" class="btn btn-warning">Editar</a>

                        <form action="{{route('marcas.destroy', $marca)}}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
        {{$marcas->links()}}
    </div>
</div>
@endsection