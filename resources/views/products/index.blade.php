@extends('layouts.app')
@section('content')

<div class="container">
    <div class="container">
        <h1>Lista de Productos</h1>
        <a href="{{ route('productos.create') }}" class="btn btn-primary float-right">Crear Nuevo</a>
        <br><br>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $producto->id }}</td>
                        <td>{{ $producto->name }}</td>
                        <td> ${{ $products->price }}</td>
                        <td>
                            <a href="{{ route('productos.edit', $product->id) }}" class="btn btn-sm btn-warning">Editar</a>

                            <form action="{{ route('productos.destroy', $product->id) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="Eliminar" class="btn btn-sm btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @if ($products->isEmpty())
            <p>No hay productos disponibles.</p>
        @endif
    </div>

@endsection
