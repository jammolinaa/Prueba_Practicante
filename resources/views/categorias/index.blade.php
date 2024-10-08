@extends('layouts.app')
@section('content')

<div class="container">
    <div class="container">
        <h3>Categorias</h3>
        <a href="{{ route('categorias.create') }}" class="btn btn-primary float-right">Crear Nueva Tarea</a>
        <br><br>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Pastas</th>
                    <th>Granos</th>
                    <th>Harinas</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $categoria)
                    <tr>
                        <td>{{ $categoria->id }}</td>
                        <td>{{ $categoria->pastas }}</td>
                        <td>{{ $categoria->granos }}</td>
                        <td>{{ $categoria->harinas }}</td>
                        <td>
                            <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-sm btn-warning">Editar</a>

                            <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @if ($categorias->isEmpty())
            <p>No hay categorias disponibles.</p>
        @endif
    </div>

 @endsection
