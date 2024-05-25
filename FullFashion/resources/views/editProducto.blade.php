@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2>Editar Producto</h2>
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
    <form action="{{ route('productos.update', $producto) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 mt-2">
                <div class="form-group">
                    <strong>Código:</strong>
                    <input required='' type="text" name="codigo" class="form-control" value="{{$producto->codigo}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 mt-2">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input required='' type="text" name="nombre" class="form-control" value="{{$producto->nombre}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 mt-2">
                <div class="form-group">
                    <strong>Marca:</strong>
                    <input required='' type="text" name="marca_id" class="form-control" value="{{$producto->marca_id}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 mt-2">
                <div class="form-group">
                    <strong>Género:</strong>
                    <select name="genero" required='' class="form-select" id="" value="{{$producto->genero}}">
                        <option value="Hombre">Hombre</option>
                        <option value="Mujer">Mujer</option>
                        <option value="Unisex">Unisex</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 mt-2">
                <div class="form-group">
                    <strong>Categoria:</strong>
                    <select name="categoria" required='' class="form-select" id="" value="{{$producto->categoria}}">
                        <option value="Deportiva">Deportiva</option>
                        <option value="Casual">Casual</option>
                        <option value="Elegante">Elegante</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 mt-2">
                <div class="form-group">
                    <strong>Talla:</strong>
                    <input required='' type="text" name="talla" class="form-control" value="{{$producto->talla}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 mt-2">
                <div class="form-group">
                    <strong>Color:</strong>
                    <input required='' type="text" name="color" class="form-control" value="{{$producto->color}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 mt-2">
                <div class="form-group">
                    <strong>Precio:</strong>
                    <input required='' type="number" name="precio" class="form-control" value="{{$producto->precio}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 mt-2">
                <div class="form-group">
                    <strong>Cantidad en stock:</strong>
                    <input required='' type="number" name="cantidad_en_stock" class="form-control"
                        value="{{$producto->cantidad_en_stock}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-1 mt-3">
                    <div class="mb-2">
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                </div>
                <div class="col-md-1 mt-3 mx-4">
                    <div class="mb-2">
                        <a href="{{ route('productos.index') }}" class="btn btn-primary">Volver</a>
                    </div>
                </div>
            </div>
        </div>
</div>
</form>
</div>
@endsection