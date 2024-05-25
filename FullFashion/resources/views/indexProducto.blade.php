@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2 class="text-white">CRUD de Productos</h2>
        </div>
        <div>
            <a href="{{ route('productos.create') }}" class="btn btn-primary">Crear Producto</a>
        </div>
    </div>

    @if (Session::get('success'))
        <div class="alert alert-success mt-2">
            <strong>{{ Session::get('success') }}</strong>
        </div>
    @endif

    <div class="col-12 mt-4">
        <table class="table table-bordered text-white">
            <thead>
                <tr class="fw-bold">
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Género</th>
                    <th>Categoría</th>
                    <th>Talla</th>
                    <th>Color</th>
                    <th>Precio</th>
                    <th>Cantidad en stock</th>
                    <th style="width: 150px;">Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <td>{{ $producto->codigo }}</td>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->marca->nombre }}</td>
                        <td>{{ $producto->genero }}</td>
                        <td>{{ $producto->categoria }}</td>
                        <td>{{ $producto->talla }}</td>
                        <td>{{ $producto->color }}</td>
                        <td>{{ $producto->precio }}</td>
                        <td>{{ $producto->cantidad_en_stock }}</td>
                        <td>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('productos.edit', $producto) }}" class="btn btn-warning btn-sm">Editar</a>
                                <form action="{{ route('productos.destroy', $producto) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $productos->links() }}
    </div>
</div>
@endsection